<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

class UnavailableForLegalReasonsException extends ClientErrorException
{
    protected string $typedMessage = 'Unavailable For Legal Reasons';
    protected int $statusCode = 451;
}
