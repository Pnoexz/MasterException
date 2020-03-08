<?php

namespace Pnoexz\ApiException\Http\ClientError;

class UnprocessableEntityException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Unprocessable Entity';

    /** @var int */
    protected $statusCode = 422;
}
