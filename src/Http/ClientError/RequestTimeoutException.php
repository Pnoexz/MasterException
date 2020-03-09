<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class RequestTimeoutException extends ClientErrorException
{
    protected string $typedMessage = 'Request Timeout';
    protected int $statusCode = 408;
}
