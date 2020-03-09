<?php

declare(strict_types=1);

namespace Pnoexz;

abstract class ApiException extends \Exception implements
    \JsonSerializable
{
    /**
     * Contains the human readable your consumer SHOULD display in case no
     * translation is available.
     */
    protected string $typedMessage;

    /**
     * The default HTTP status code to send in the headers if none is given.
     * It's RECOMMENDED that you set this value for each exception.
     * For more information, visit: https://httpstatuses.com/
     */
    protected int $statusCode = 500;

    /**
     * A default PSR-3 compliant level for the exception if none is given.
     * It's RECOMMENDED that you set this value for each exception.
     * For more information, visit: https://www.php-fig.org/psr/psr-3/
     */
    protected string $level = \Psr\Log\LogLevel::ERROR;

    /**
     * @var array<mixed>|null
     */
    protected array $data = [];

    /**
     * @param array<mixed>|null $data   Any JSON serializable data we should
     *                                  send to the user along with the built-in
     *                                  information
     * @param \Throwable|null $previous The previous exception thrown to
     *                                  maintain the exception chain
     */
    public function __construct(?array $data = [], ?\Throwable $previous = null)
    {
        if (!\is_null($data) && \is_countable($data) && \count($data) > 0) {
            $this->data = $data;
        }

        parent::__construct($this->typedMessage, 0, $previous);
    }

    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array<mixed> $newData
     * @return self
     */
    public function setData(array $newData): self
    {
        $this->data = $newData;

        return $this;
    }

    /**
     * @param array<mixed> $moreData
     * @return self
     */
    public function appendData(array $moreData): self
    {
        $this->data = \array_merge($this->data, $moreData);

        return $this;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getLevel(): string
    {
        return $this->level;
    }

    public function jsonSerialize(): array
    {
        $output = [
            'class' => \get_class($this),
            'message' => $this->message,
            'statusCode' => $this->statusCode,
        ];

        if (\count($this->data) > 0) {
            $output['data'] = $this->data;
        }

        return $output;
    }
}
