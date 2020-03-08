<?php

namespace Pnoexz\ApiExceptionTests;

use Pnoexz\ApiException;
use Pnoexz\ApiException\Http\ClientError\ClientErrorException;

class ClientErrorExceptionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function badRequestException()
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
    public function unauthorizedException()
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
    public function paymentRequiredException()
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
    public function forbiddenException()
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
    public function notFoundException()
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
    public function methodNotAllowedException()
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
    public function notAcceptableException()
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
    public function proxyAuthenticationRequiredException()
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
    public function requestTimeoutException()
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
    public function conflictException()
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
    public function goneException()
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
    public function lengthRequiredException()
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
    public function preconditionFailedException()
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
    public function payloadTooLargeException()
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
    public function requestUriTooLongException()
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
    public function unsupportedMediaTypeException()
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
    public function requestedRangeNotSatisExceptionfiable()
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
    public function expectationFailedException()
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
    public function imATeapotException()
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
    public function misdirectedRequestException()
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
    public function unprocessableEntityException()
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
    public function lockedException()
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
    public function failedDependencyException()
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
    public function upgradeRequiredException()
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
    public function preconditionRequiredException()
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
    public function tooManyRequestsException()
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
    public function requestHeaderFieldsTooExceptionLarge()
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
    public function connectionClosedWithouExceptiontResponse()
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
    public function unavailableForLegalReaExceptionsons()
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
    public function clientClosedRequestException()
    {
        $exception = new \Pnoexz\ApiException\Http\ClientError\ClientClosedRequestException();
        $this->assertSame(499, $exception->getStatusCode());
        $this->assertSame('Client Closed Request', $exception->getMessage());
        $this->assertInstanceOf(ClientErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }
}
