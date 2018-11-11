<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ClientError;

class BadRequestException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Bad Request';

    /** @var int */
    protected $statusCode = 400;
}
