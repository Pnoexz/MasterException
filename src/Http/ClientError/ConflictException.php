<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class ConflictException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Conflict';

    /** @var int */
    protected $statusCode = 409;
}
