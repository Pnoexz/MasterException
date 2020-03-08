<?php

namespace Pnoexz\ApiException\Http\ClientError;

class UnavailableForLegalReasonsException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Unavailable For Legal Reasons';

    /** @var int */
    protected $statusCode = 451;
}
