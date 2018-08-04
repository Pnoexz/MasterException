<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

abstract class ClientErrorException extends \Pnoexz\ApiException
{
    /** @var string */
    protected $level = \Psr\Log\LogLevel::WARNING;
}
