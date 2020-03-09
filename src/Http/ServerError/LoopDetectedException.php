<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class LoopDetectedException extends ServerErrorException
{
    protected string $typedMessage = 'Loop Detected';
    protected int $statusCode = 508;
}
