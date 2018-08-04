<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class UnsupportedMediaTypeException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Unsupported Media Type';

    /** @var int */
    protected $statusCode = 415;
}
