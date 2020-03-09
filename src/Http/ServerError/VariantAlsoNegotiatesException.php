<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

class VariantAlsoNegotiatesException extends ServerErrorException
{
    protected string $typedMessage = 'Variant Also Negotiates';
    protected int $statusCode = 506;
}
