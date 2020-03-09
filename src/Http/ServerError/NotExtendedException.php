<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class NotExtendedException extends ServerErrorException
{
    protected string $typedMessage = 'Not Extended';
    protected int $statusCode = 510;
}
