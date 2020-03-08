<?php

namespace Pnoexz\ApiException\Http\ServerError;

class ServiceUnavailableException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Service Unavailable';

    /** @var int */
    protected $statusCode = 503;
}
