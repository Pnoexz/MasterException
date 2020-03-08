<?php

namespace Pnoexz\ApiException\Http\ClientError;

class ConflictException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Conflict';

    /** @var int */
    protected $statusCode = 409;
}
