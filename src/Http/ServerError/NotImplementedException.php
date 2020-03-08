<?php

namespace Pnoexz\ApiException\Http\ServerError;

class NotImplementedException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Not Implemented';

    /** @var int */
    protected $statusCode = 501;
}
