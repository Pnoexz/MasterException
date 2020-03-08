<?php

namespace Pnoexz\ApiException\Http\ClientError;

class ImATeapotException extends ClientErrorException
{
    /** @var string */
    protected $message = "I'm a teapot";

    /** @var int */
    protected $statusCode = 418;
}
