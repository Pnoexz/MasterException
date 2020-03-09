<?php

declare(strict_types=1);

namespace Pnoexz\ApiException\Http\ClientError;

abstract class ClientErrorException extends \Pnoexz\ApiException
{
    protected string $level = \Psr\Log\LogLevel::WARNING;
}
