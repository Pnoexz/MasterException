<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class NetworkConnectTimeoutErrorException extends ServerErrorException
{
    protected string $typedMessage = 'Network Connect Timeout Error';
    protected int $statusCode = 599;
}
