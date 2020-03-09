<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class MethodNotAllowedException extends ClientErrorException
{
    protected string $typedMessage = 'Method Not Allowed';
    protected int $statusCode = 405;
}
