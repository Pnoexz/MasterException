<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class ForbiddenException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Forbidden';

    /** @var int */
    protected $statusCode = 403;
}
