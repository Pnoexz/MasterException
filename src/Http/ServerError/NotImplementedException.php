<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class NotImplementedException extends ServerErrorException
{
    protected string $typedMessage = 'Not Implemented';
    protected int $statusCode = 501;
}
