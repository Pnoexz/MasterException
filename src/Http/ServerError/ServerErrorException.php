<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ServerError;

abstract class ServerErrorException extends \Pnoexz\ApiException
{
    /** @var string */
    protected $level = \Psr\Log\LogLevel::ERROR;
}
