<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class PreconditionFailedException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Precondition Failed';

    /** @var int */
    protected $statusCode = 412;
}
