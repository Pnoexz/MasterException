<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class NetworkAuthenticationRequiredException extends ServerErrorException
{
    protected string $typedMessage = 'Network Authentication Required';
    protected int $statusCode = 511;
}
