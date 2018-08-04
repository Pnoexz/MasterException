<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class UnavailableForLegalReasonsException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Unavailable For Legal Reasons';

    /** @var int */
    protected $statusCode = 451;
}
