<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class UnprocessableEntityException extends ClientErrorException
{
    protected string $typedMessage = 'Unprocessable Entity';
    protected int $statusCode = 422;
}
