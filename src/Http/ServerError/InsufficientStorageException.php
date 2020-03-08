<?php

namespace Pnoexz\ApiException\Http\ServerError;

class InsufficientStorageException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Insufficient Storage';

    /** @var int */
    protected $statusCode = 507;
}
