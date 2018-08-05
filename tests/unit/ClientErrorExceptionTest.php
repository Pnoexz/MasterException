<?php

/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiExceptionTests;

use Pnoexz\ApiException;
use Pnoexz\ApiException\Http\ClientError\ClientErrorException;
use Psr\Log\LogLevel;

class ClientErrorExceptionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function BadRequestException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\BadRequestException();
        $this->assertSame(400, $exception->getStatusCode());
        $this->assertSame('Bad Request', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function UnauthorizedException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\UnauthorizedException();
        $this->assertSame(401, $exception->getStatusCode());
        $this->assertSame('Unauthorized', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function PaymentRequiredException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\PaymentRequiredException();
        $this->assertSame(402, $exception->getStatusCode());
        $this->assertSame('Payment Required', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function ForbiddenException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\ForbiddenException();
        $this->assertSame(403, $exception->getStatusCode());
        $this->assertSame('Forbidden', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function NotFoundException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\NotFoundException();
        $this->assertSame(404, $exception->getStatusCode());
        $this->assertSame('Not Found', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function MethodNotAllowedException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\MethodNotAllowedException();
        $this->assertSame(405, $exception->getStatusCode());
        $this->assertSame('Method Not Allowed', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function NotAcceptableException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\NotAcceptableException();
        $this->assertSame(406, $exception->getStatusCode());
        $this->assertSame('Not Acceptable', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function ProxyAuthenticationReqExceptionuired()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\ProxyAuthenticationRequiredException();
        $this->assertSame(407, $exception->getStatusCode());
        $this->assertSame('Proxy Authentication Required', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function RequestTimeoutException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\RequestTimeoutException();
        $this->assertSame(408, $exception->getStatusCode());
        $this->assertSame('Request Timeout', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function ConflictException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\ConflictException();
        $this->assertSame(409, $exception->getStatusCode());
        $this->assertSame('Conflict', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function GoneException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\GoneException();
        $this->assertSame(410, $exception->getStatusCode());
        $this->assertSame('Gone', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function LengthRequiredException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\LengthRequiredException();
        $this->assertSame(411, $exception->getStatusCode());
        $this->assertSame('Length Required', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function PreconditionFailedException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\PreconditionFailedException();
        $this->assertSame(412, $exception->getStatusCode());
        $this->assertSame('Precondition Failed', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function PayloadTooLargeException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\PayloadTooLargeException();
        $this->assertSame(413, $exception->getStatusCode());
        $this->assertSame('Payload Too Large', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function RequestUriTooLongException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\RequestUriTooLongException();
        $this->assertSame(414, $exception->getStatusCode());
        $this->assertSame('Request-URI Too Long', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function UnsupportedMediaTypeException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\UnsupportedMediaTypeException();
        $this->assertSame(415, $exception->getStatusCode());
        $this->assertSame('Unsupported Media Type', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function RequestedRangeNotSatisExceptionfiable()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\RequestedRangeNotSatisfiableException();
        $this->assertSame(416, $exception->getStatusCode());
        $this->assertSame('Requested Range Not Satisfiable', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function ExpectationFailedException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\ExpectationFailedException();
        $this->assertSame(417, $exception->getStatusCode());
        $this->assertSame('Expectation Failed', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function ImATeapotException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\ImATeapotException();
        $this->assertSame(418, $exception->getStatusCode());
        $this->assertSame('I\'m a teapot', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function MisdirectedRequestException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\MisdirectedRequestException();
        $this->assertSame(421, $exception->getStatusCode());
        $this->assertSame('Misdirected Request', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function UnprocessableEntityException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\UnprocessableEntityException();
        $this->assertSame(422, $exception->getStatusCode());
        $this->assertSame('Unprocessable Entity', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function LockedException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\LockedException();
        $this->assertSame(423, $exception->getStatusCode());
        $this->assertSame('Locked', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function FailedDependencyException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\FailedDependencyException();
        $this->assertSame(424, $exception->getStatusCode());
        $this->assertSame('Failed Dependency', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function UpgradeRequiredException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\UpgradeRequiredException();
        $this->assertSame(426, $exception->getStatusCode());
        $this->assertSame('Upgrade Required', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function PreconditionRequiredException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\PreconditionRequiredException();
        $this->assertSame(428, $exception->getStatusCode());
        $this->assertSame('Precondition Required', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function TooManyRequestsException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\TooManyRequestsException();
        $this->assertSame(429, $exception->getStatusCode());
        $this->assertSame('Too Many Requests', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function RequestHeaderFieldsTooExceptionLarge()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\RequestHeaderFieldsTooLargeException();
        $this->assertSame(431, $exception->getStatusCode());
        $this->assertSame('Request Header Fields Too Large', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function ConnectionClosedWithouExceptiontResponse()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\ConnectionClosedWithoutResponseException();
        $this->assertSame(444, $exception->getStatusCode());
        $this->assertSame('Connection Closed Without Response', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function UnavailableForLegalReaExceptionsons()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\UnavailableForLegalReasonsException();
        $this->assertSame(451, $exception->getStatusCode());
        $this->assertSame('Unavailable For Legal Reasons', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function ClientClosedRequestException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\ClientClosedRequestException();
        $this->assertSame(499, $exception->getStatusCode());
        $this->assertSame('Client Closed Request', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }
}
