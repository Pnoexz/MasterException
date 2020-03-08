<?php

namespace Pnoexz\ApiException\Http\ClientError;

class PreconditionFailedException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Precondition Failed';

    /** @var int */
    protected $statusCode = 412;
}
