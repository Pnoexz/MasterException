<?php

namespace Pnoexz\ApiException\Http\ServerError;

abstract class ServerErrorException extends \Pnoexz\ApiException
{
    /** @var string */
    protected $level = \Psr\Log\LogLevel::ERROR;
}
