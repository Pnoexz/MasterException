<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class PreconditionFailedException extends ClientErrorException
{
    protected string $typedMessage = 'Precondition Failed';
    protected int $statusCode = 412;
}
