<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ClientError;

class UnsupportedMediaTypeException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Unsupported Media Type';

    /** @var int */
    protected $statusCode = 415;
}
