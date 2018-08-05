<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class RequestUriTooLongException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Request-URI Too Long';

    /** @var int */
    protected $statusCode = 414;
}
