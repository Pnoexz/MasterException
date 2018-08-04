<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ServerError;

class GatewayTimeoutException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Gateway Timeout';

    /** @var int */
    protected $statusCode = 504;
}
