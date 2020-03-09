<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class UpgradeRequiredException extends ClientErrorException
{
    protected string $typedMessage = 'Upgrade Required';
    protected int $statusCode = 426;
}
