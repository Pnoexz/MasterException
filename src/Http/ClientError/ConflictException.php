<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class ConflictException extends ClientErrorException
{
    protected string $typedMessage = 'Conflict';
    protected int $statusCode = 409;
}
