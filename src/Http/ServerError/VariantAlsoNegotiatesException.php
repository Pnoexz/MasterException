<?php
/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiException\Http\ServerError;

class VariantAlsoNegotiatesException extends ServerErrorException
{
    /** @var string */
    protected $message = 'Variant Also Negotiates';

    /** @var int */
    protected $statusCode = 506;
}
