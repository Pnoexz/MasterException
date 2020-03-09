<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class GatewayTimeoutException extends ServerErrorException
{
    protected string $typedMessage = 'Gateway Timeout';
    protected int $statusCode = 504;
}
