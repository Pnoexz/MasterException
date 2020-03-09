<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class PreconditionRequiredException extends ClientErrorException
{
    protected string $typedMessage = 'Precondition Required';
    protected int $statusCode = 428;
}
