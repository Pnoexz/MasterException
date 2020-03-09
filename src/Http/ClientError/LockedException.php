<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class LockedException extends ClientErrorException
{
    protected string $typedMessage = 'Locked';
    protected int $statusCode = 423;
}
