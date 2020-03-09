<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class ConnectionClosedWithoutResponseException extends ClientErrorException
{
    protected string $typedMessage = 'Connection Closed Without Response';
    protected int $statusCode = 444;
}
