<?php

namespace Pnoexz\ApiException\Http\ServerError;

class NetworkAuthenticationRequiredException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Network Authentication Required';

    /** @var int */
    protected $statusCode = 511;
}
