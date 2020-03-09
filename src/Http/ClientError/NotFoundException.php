<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class NotFoundException extends ClientErrorException
{
    protected string $typedMessage = 'Not Found';
    protected int $statusCode = 404;
}
