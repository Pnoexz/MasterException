<?php

namespace Pnoexz\ApiException\Http\ClientError;

abstract class ClientErrorException extends \Pnoexz\ApiException
{
    /** @var string */
    protected $level = \Psr\Log\LogLevel::WARNING;
}
