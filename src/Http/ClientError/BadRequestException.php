<?php

namespace Pnoexz\ApiException\Http\ClientError;

class BadRequestException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Bad Request';

    /** @var int */
    protected $statusCode = 400;
}
