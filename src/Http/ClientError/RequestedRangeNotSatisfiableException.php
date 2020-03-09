<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class RequestedRangeNotSatisfiableException extends ClientErrorException
{
    protected string $typedMessage = 'Requested Range Not Satisfiable';
    protected int $statusCode = 416;
}
