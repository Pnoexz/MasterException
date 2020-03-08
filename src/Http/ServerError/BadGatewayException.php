<?php

namespace Pnoexz\ApiException\Http\ServerError;

class BadGatewayException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Bad Gateway';

    /** @var int */
    protected $statusCode = 502;
}
