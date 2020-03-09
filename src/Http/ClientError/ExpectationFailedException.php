<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class ExpectationFailedException extends ClientErrorException
{
    protected string $typedMessage = 'Expectation Failed';
    protected int $statusCode = 417;
}
