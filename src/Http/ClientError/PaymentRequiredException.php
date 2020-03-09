<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class PaymentRequiredException extends ClientErrorException
{
    protected string $typedMessage = 'Payment Required';
    protected int $statusCode = 402;
}
