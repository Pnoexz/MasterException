<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class LengthRequiredException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Length Required';

    /** @var int */
    protected $statusCode = 411;
}
