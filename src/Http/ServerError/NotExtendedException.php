<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ServerError;

class NotExtendedException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Not Extended';

    /** @var int */
    protected $statusCode = 510;
}
