<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http;

abstract class NotFoundException extends \Pnoexz\ApiException
{
    /** @var string */
    protected $message = 'Not found.';

    /** @var int */
    protected $httpStatus = 404;

    /** @var string */
    protected $level = \Psr\Log\LogLevel::WARNING;
}
