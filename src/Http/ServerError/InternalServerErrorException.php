<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ServerError;

class InternalServerErrorException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Internal Server Error';

    /** @var int */
    protected $statusCode = 500;
}
