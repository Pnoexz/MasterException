<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class LengthRequiredException extends ClientErrorException
{
    protected string $typedMessage = 'Length Required';
    protected int $statusCode = 411;
}
