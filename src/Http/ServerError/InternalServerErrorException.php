<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ServerError;

class InternalServerErrorException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Internal Server Error';

    /** @var int */
    protected $statusCode = 500;
}
