<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class FailedDependencyException extends ClientErrorException
{
    protected string $typedMessage = 'Failed Dependency';
    protected int $statusCode = 424;
}
