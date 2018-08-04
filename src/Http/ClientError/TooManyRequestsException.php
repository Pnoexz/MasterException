<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class TooManyRequestsException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Too Many Requests';

    /** @var int */
    protected $statusCode = 429;
}
