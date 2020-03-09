<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class UnsupportedMediaTypeException extends ClientErrorException
{
    protected string $typedMessage = 'Unsupported Media Type';
    protected int $statusCode = 415;
}
