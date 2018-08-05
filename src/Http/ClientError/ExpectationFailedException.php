<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class ExpectationFailedException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Expectation Failed';

    /** @var int */
    protected $statusCode = 417;
}
