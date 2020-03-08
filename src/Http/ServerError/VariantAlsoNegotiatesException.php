<?php

namespace Pnoexz\ApiException\Http\ServerError;

class VariantAlsoNegotiatesException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Variant Also Negotiates';

    /** @var int */
    protected $statusCode = 506;
}
