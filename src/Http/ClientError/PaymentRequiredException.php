<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ClientError;

class PaymentRequiredException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Payment Required';

    /** @var int */
    protected $statusCode = 402;
}
