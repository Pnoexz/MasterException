<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class RequestHeaderFieldsTooLargeException extends ClientErrorException
{
    protected string $typedMessage = 'Request Header Fields Too Large';
    protected int $statusCode = 431;
}
