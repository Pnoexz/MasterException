<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ServerError;

class InsufficientStorageException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Insufficient Storage';

    /** @var int */
    protected $statusCode = 507;
}
