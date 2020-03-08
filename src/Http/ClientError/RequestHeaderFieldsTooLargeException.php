<?php

namespace Pnoexz\ApiException\Http\ClientError;

class RequestHeaderFieldsTooLargeException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Request Header Fields Too Large';

    /** @var int */
    protected $statusCode = 431;
}
