<?php

declare(strict_types=1);

namespace Pnoexz\ApiExceptionTests;

use Pnoexz\ApiException;
use Psr\Log\LogLevel;

class ApiExceptionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function extendsException(): void
    {
        $mockException = new class extends ApiException{
            protected string $typedMessage = 'Exception';
        };
        $this->assertInstanceOf('\Exception', $mockException);
    }

    /**
     * @test
     */
    public function mantainsPreviousException(): void
    {
        $previousException = new \Exception('Previous');
        $mockException = new ApiExceptionMock([], $previousException);

        $this->assertInstanceOf('\Exception', $mockException->getPrevious());
    }

    /**
     * @test
     */
    public function canHandleDataInConstructor(): void
    {
        $data = ['testing' => true];
        $mockException = new ApiExceptionMock($data);

        $this->assertSame($data, $mockException->getData());
    }

    /**
     * @test
     */
    public function canSetDataWithMethod(): void
    {
        $data = ['testing' => true];
        $mockException = new ApiExceptionMock();
        $mockException->setData($data);

        $this->assertSame($data, $mockException->getData());
    }

    /**
     * @test
     */
    public function canAppendDataWithMethod(): void
    {
        $data = ['testing' => true];
        $dataToAppend = ['foo' => 'bar'];
        $mockException = new ApiExceptionMock($data);
        $mockException->appendData($dataToAppend);

        $expectedData = \array_merge($data, $dataToAppend);

        $this->assertSame($expectedData, $mockException->getData());
    }

    /**
     * @test
     */
    public function canRetrieveStatusCode(): void
    {
        $mockException = new class extends ApiExceptionMock {
            protected int $statusCode = 201;
        };

        $this->assertSame(201, $mockException->getStatusCode());
    }

    /**
     * @test
     */
    public function canRetrieveLevel(): void
    {
        $mockException = new class extends ApiExceptionMock {
            protected string $level = LogLevel::WARNING;
        };

        $this->assertSame(LogLevel::WARNING, $mockException->getLevel());
    }

    /**
     * @test
     */
    public function canBeJsonEncoded(): void
    {
        $mockException = new class extends ApiException {
            protected string $typedMessage = "Exception message.";
            protected int $statusCode = 400;
            protected string $level = LogLevel::ERROR;
        };

        $this->assertJson(\json_encode($mockException));
    }

    /**
     * @test
     */
    public function dataIsAlsoExportedToJson(): void
    {
        $data = ['testing' => true];
        $mockException = new ApiExceptionMock($data);

        $jsonString = \json_encode($mockException);
        $jsonArray = \json_decode($jsonString, true);

        $this->assertJson($jsonString);
        $this->assertInternalType('array', $jsonArray);
        $this->assertArrayHasKey('data', $jsonArray);
        $this->assertArrayHasKey('testing', $jsonArray['data']);
        $this->assertSame(true, $jsonArray['data']['testing']);
    }

    /**
     * @test
     */
    public function dataCanBeNull(): void
    {
        $mockException = new ApiExceptionMock(null);
        $this->assertInstanceOf('\Exception', $mockException);
    }
}
