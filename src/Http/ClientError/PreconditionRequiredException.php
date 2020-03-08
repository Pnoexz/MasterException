<?php

namespace Pnoexz\ApiException\Http\ClientError;

class PreconditionRequiredException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Precondition Required';

    /** @var int */
    protected $statusCode = 428;
}
