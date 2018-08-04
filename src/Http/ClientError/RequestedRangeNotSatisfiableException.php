<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class RequestedRangeNotSatisfiableException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Requested Range Not Satisfiable';

    /** @var int */
    protected $statusCode = 416;
}
