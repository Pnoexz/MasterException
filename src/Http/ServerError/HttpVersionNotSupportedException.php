<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class HttpVersionNotSupportedException extends ServerErrorException
{
    protected string $typedMessage = 'HTTP Version Not Supported';
    protected int $statusCode = 505;
}
