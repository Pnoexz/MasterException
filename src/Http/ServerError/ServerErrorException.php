<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ServerError;

abstract class ServerErrorException extends \Pnoexz\ApiException
{
    /** @var string */
    protected $level = \Psr\Log\LogLevel::ERROR;
}
