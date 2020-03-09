<?php

declare(strict_types=1);

namespace Pnoexz\ApiExceptionTests;

class ApiExceptionMock extends \Pnoexz\ApiException
{
    protected string $typedMessage = 'Example message';
    protected int $statusCode = 404;
    protected string $level = \Psr\Log\LogLevel::WARNING;
}
