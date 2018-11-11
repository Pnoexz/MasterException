<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license MIT
 */

namespace Pnoexz\ApiException\Http\ClientError;

class NotFoundException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Not Found';

    /** @var int */
    protected $statusCode = 404;
}
