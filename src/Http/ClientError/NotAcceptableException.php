<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class NotAcceptableException extends ClientErrorException
{
    protected string $typedMessage = 'Not Acceptable';
    protected int $statusCode = 406;
}
