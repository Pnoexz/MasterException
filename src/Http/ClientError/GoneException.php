<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ClientError;

class GoneException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Gone';

    /** @var int */
    protected $statusCode = 410;
}
