<?php

namespace Pnoexz\ApiException\Http\ClientError;

class MisdirectedRequestException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Misdirected Request';

    /** @var int */
    protected $statusCode = 421;
}
