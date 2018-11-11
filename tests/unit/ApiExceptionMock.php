<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiExceptionTests;

class ApiExceptionMock extends \Pnoexz\ApiException
{
    /** @var string */
    protected $message = 'Example message';

    /** @var int */
    protected $httpStatus = 404;

    /** @var string */
    protected $level = \Psr\Log\LogLevel::WARNING;
}
