<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http;

abstract class NotFoundException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Not found.';

    /** @var int */
    protected $httpStatus = 404;
}
