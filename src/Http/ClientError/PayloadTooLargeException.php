<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class PayloadTooLargeException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Payload Too Large';

    /** @var int */
    protected $statusCode = 413;
}
