<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class ClientClosedRequestException extends ClientErrorException
{
    protected string $typedMessage = 'Client Closed Request';
    protected int $statusCode = 499;
}
