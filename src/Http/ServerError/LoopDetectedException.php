<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ServerError;

class LoopDetectedException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Loop Detected';

    /** @var int */
    protected $statusCode = 508;
}
