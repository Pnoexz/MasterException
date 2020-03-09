<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class ForbiddenException extends ClientErrorException
{
    protected string $typedMessage = 'Forbidden';
    protected int $statusCode = 403;
}
