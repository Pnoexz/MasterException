<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ClientError;

class UnauthorizedException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Unauthorized';

    /** @var int */
    protected $statusCode = 401;
}
