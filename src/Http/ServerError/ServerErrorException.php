<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ServerError;

abstract class ServerErrorException extends \Pnoexz\ApiException
{
    protected string $level = \Psr\Log\LogLevel::ERROR;
}
