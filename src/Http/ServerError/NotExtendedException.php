<?php

namespace Pnoexz\ApiException\Http\ServerError;

class NotExtendedException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Not Extended';

    /** @var int */
    protected $statusCode = 510;
}
