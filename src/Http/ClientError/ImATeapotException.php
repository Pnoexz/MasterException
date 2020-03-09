<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class ImATeapotException extends ClientErrorException
{
    protected string $typedMessage = "I'm a teapot";
    protected int $statusCode = 418;
}
