<?php

namespace Pnoexz\ApiExceptionTests;

use Pnoexz\ApiException;
use Pnoexz\ApiException\Http\ServerError\ServerErrorException;
use Psr\Log\LogLevel;

class ServerErrorExceptionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function internalServerErrorException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\InternalServerErrorException();
        $this->assertSame(500, $exception->getStatusCode());
        $this->assertSame('Internal Server Error', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function notImplementedException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\NotImplementedException();
        $this->assertSame(501, $exception->getStatusCode());
        $this->assertSame('Not Implemented', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function badGatewayException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\BadGatewayException();
        $this->assertSame(502, $exception->getStatusCode());
        $this->assertSame('Bad Gateway', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function serviceUnavailableException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\ServiceUnavailableException();
        $this->assertSame(503, $exception->getStatusCode());
        $this->assertSame('Service Unavailable', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function gatewayTimeoutException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\GatewayTimeoutException();
        $this->assertSame(504, $exception->getStatusCode());
        $this->assertSame('Gateway Timeout', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function httpVersionNotSupportedException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\HttpVersionNotSupportedException();
        $this->assertSame(505, $exception->getStatusCode());
        $this->assertSame('HTTP Version Not Supported', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function variantAlsoNegotiatesException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\VariantAlsoNegotiatesException();
        $this->assertSame(506, $exception->getStatusCode());
        $this->assertSame('Variant Also Negotiates', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function insufficientStorageException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\InsufficientStorageException();
        $this->assertSame(507, $exception->getStatusCode());
        $this->assertSame('Insufficient Storage', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function loopDetectedException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\LoopDetectedException();
        $this->assertSame(508, $exception->getStatusCode());
        $this->assertSame('Loop Detected', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function notExtendedException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\NotExtendedException();
        $this->assertSame(510, $exception->getStatusCode());
        $this->assertSame('Not Extended', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function networkAuthenticationRequiredException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\NetworkAuthenticationRequiredException();
        $this->assertSame(511, $exception->getStatusCode());
        $this->assertSame('Network Authentication Required', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }

    /**
     * @test
     */
    public function networkConnectTimeoutErrorException()
    {
        $exception = new \Pnoexz\ApiException\Http\ServerError\NetworkConnectTimeoutErrorException();
        $this->assertSame(599, $exception->getStatusCode());
        $this->assertSame('Network Connect Timeout Error', $exception->getMessage());
        $this->assertInstanceOf(ServerErrorException::class, $exception);
        $this->assertInstanceOf(ApiException::class, $exception);
    }
}
