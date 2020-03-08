<?php

namespace Pnoexz\ApiException\Http\ClientError;

class FailedDependencyException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Failed Dependency';

    /** @var int */
    protected $statusCode = 424;
}
