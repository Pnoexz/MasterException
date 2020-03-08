<?php

namespace Pnoexz\ApiException\Http\ClientError;

class MethodNotAllowedException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Method Not Allowed';

    /** @var int */
    protected $statusCode = 405;
}
