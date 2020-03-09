<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class InsufficientStorageException extends ServerErrorException
{
    protected string $typedMessage = 'Insufficient Storage';
    protected int $statusCode = 507;
}
