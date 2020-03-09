<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class PayloadTooLargeException extends ClientErrorException
{
    protected string $typedMessage = 'Payload Too Large';
    protected int $statusCode = 413;
}
