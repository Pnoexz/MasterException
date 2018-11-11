<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ClientError;

class ProxyAuthenticationRequiredException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Proxy Authentication Required';

    /** @var int */
    protected $statusCode = 407;
}
