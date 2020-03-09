<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class RequestUriTooLongException extends ClientErrorException
{
    protected string $typedMessage = 'Request-URI Too Long';
    protected int $statusCode = 414;
}
