<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class ServiceUnavailableException extends ServerErrorException
{
    protected string $typedMessage = 'Service Unavailable';
    protected int $statusCode = 503;
}
