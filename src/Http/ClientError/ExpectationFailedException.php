<?php

namespace Pnoexz\ApiException\Http\ClientError;

class ExpectationFailedException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Expectation Failed';

    /** @var int */
    protected $statusCode = 417;
}
