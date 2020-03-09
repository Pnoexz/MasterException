<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class GoneException extends ClientErrorException
{
    protected string $typedMessage = 'Gone';
    protected int $statusCode = 410;
}
