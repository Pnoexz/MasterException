<?php

namespace Pnoexz\ApiException\Http\ClientError;

class TooManyRequestsException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Too Many Requests';

    /** @var int */
    protected $statusCode = 429;
}
