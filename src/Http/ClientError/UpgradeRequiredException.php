<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ClientError;

class UpgradeRequiredException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Upgrade Required';

    /** @var int */
    protected $statusCode = 426;
}
