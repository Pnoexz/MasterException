<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class PreconditionRequiredException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Precondition Required';

    /** @var int */
    protected $statusCode = 428;
}
