<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class BadRequestException extends ClientErrorException
{
    protected string $typedMessage = 'Bad Request';
    protected int $statusCode = 400;
}
