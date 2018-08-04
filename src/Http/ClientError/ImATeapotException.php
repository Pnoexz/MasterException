<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class ImATeapotException extends ClientErrorException
{
    /** @var string */
    protected $message = "I'm a teapot";

    /** @var int */
    protected $statusCode = 418;
}
