<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class ConnectionClosedWithoutResponseException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Connection Closed Without Response';

    /** @var int */
    protected $statusCode = 444;
}
