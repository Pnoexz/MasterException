<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class InternalServerErrorException extends ServerErrorException
{
    protected string $typedMessage = 'Internal Server Error';
    protected int $statusCode = 500;
}
