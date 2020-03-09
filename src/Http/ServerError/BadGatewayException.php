<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class BadGatewayException extends ServerErrorException
{
    protected string $typedMessage = 'Bad Gateway';
    protected int $statusCode = 502;
}
