<?php

namespace Pnoexz\ApiException\Http\ClientError;

class LengthRequiredException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Length Required';

    /** @var int */
    protected $statusCode = 411;
}
