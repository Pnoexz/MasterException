<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class ProxyAuthenticationRequiredException extends ClientErrorException
{
    protected string $typedMessage = 'Proxy Authentication Required';
    protected int $statusCode = 407;
}
