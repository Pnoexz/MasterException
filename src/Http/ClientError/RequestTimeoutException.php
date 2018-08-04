<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class RequestTimeoutException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Request Timeout';

    /** @var int */
    protected $statusCode = 408;
}
