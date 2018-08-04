<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class UnprocessableEntityException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Unprocessable Entity';

    /** @var int */
    protected $statusCode = 422;
}
