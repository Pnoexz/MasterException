<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class NotFoundException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Not Found';

    /** @var int */
    protected $statusCode = 404;
}
