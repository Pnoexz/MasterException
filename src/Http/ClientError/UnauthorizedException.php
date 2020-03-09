<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class UnauthorizedException extends ClientErrorException
{
    protected string $typedMessage = 'Unauthorized';
    protected int $statusCode = 401;
}
