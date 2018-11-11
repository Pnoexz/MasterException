<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ClientError;

class LockedException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Locked';

    /** @var int */
    protected $statusCode = 423;
}
