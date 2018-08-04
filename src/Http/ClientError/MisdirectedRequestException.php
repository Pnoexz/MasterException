<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ClientError;

class MisdirectedRequestException extends ClientErrorException
{
    /** @var string */
    protected $message = 'Misdirected Request';

    /** @var int */
    protected $statusCode = 421;
}
