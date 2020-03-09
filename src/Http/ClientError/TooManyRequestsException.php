<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class TooManyRequestsException extends ClientErrorException
{
    protected string $typedMessage = 'Too Many Requests';
    protected int $statusCode = 429;
}
