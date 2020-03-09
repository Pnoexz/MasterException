<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class MisdirectedRequestException extends ClientErrorException
{
    protected string $typedMessage = 'Misdirected Request';
    protected int $statusCode = 421;
}
