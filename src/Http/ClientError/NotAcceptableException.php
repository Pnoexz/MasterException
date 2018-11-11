<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ClientError;

class NotAcceptableException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Not Acceptable';

    /** @var int */
    protected $statusCode = 406;
}
