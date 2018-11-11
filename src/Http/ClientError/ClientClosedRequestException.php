<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ClientError;

class ClientClosedRequestException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Client Closed Request';

    /** @var int */
    protected $statusCode = 499;
}
