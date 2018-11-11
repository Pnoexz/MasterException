<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ServerError;

class HttpVersionNotSupportedException extends ServerErrorException
{
    /** @var string */
    protected $message = 'HTTP Version Not Supported';

    /** @var int */
    protected $statusCode = 505;
}
