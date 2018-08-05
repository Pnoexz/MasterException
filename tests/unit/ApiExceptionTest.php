<?php

/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiExceptionTests;

use Pnoexz\ApiException;
use Psr\Log\LogLevel;

class ApiExceptionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function extendsException()
    {
        $mockException = new class extends ApiException {};
        $this->assertInstanceOf('\Exception', $mockException);
    }

    /**
     * @test
     */
    public function mantainsPreviousException()
    {

        $previousException = new \Exception('Previous');
        $mockException = new ApiExceptionMock([], $previousException);

        $this->assertInstanceOf('\Exception', $mockException->getPrevious());
    }

    /**
     * @test
     */
    public function canHandleDataInConstructor()
    {
        $data = ['testing' => true];
        $mockException = new ApiExceptionMock($data);

        $this->assertSame($data, $mockException->getData());
    }

    /**
     * @test
     */
    public function canSetDataWithMethod()
    {
        $data = ['testing' => true];
        $mockException = new ApiExceptionMock();
        $mockException->setData($data);

        $this->assertSame($data, $mockException->getData());
    }

    /**
     * @test
     */
    public function canAppendDataWithMethod()
    {
        $data = ['testing' => true];
        $dataToAppend = ['foo' => 'bar'];
        $mockException = new ApiExceptionMock($data);
        $mockException->appendData($dataToAppend);

        $expectedData = array_merge($data, $dataToAppend);

        $this->assertSame($expectedData, $mockException->getData());
    }

    /**
     * @test
     */
    public function exceptionCanBeCastedToString()
    {
        /** @var ApiException $mockException */
        $mockException = new class extends ApiException {
            protected $message = "Actual exception message.";
        };

        $this->assertSame(
            "Actual exception message.",
            (string) $mockException
        );
    }

    /**
     * @test
     */
    public function canRetrieveHttpStatus()
    {
        /** @var ApiException $mockException */
        $mockException = new class extends ApiException {
            protected $statusCode = 201;
        };

        $this->assertSame(201, $mockException->getStatusCode());
    }

    /**
     * @test
     */
    public function canRetrieveLevel()
    {
        /** @var ApiException $mockException */
        $mockException = new class extends ApiException {
            protected $level = LogLevel::WARNING;
        };

        $this->assertSame(LogLevel::WARNING, $mockException->getLevel());
    }

    /**
     * @test
     */
    public function canBeJsonEncoded()
    {
        /** @var ApiException $mockException */
        $mockException = new class extends ApiException {
            protected $message = "Exception message.";
            protected $httpStatus = 400;
            protected $level = LogLevel::ERROR;
        };

        $this->assertJson(
            json_encode($mockException)
        );
    }

    /**
     * @test
     */
    public function dataIsAlsoExportedToJson()
    {
        $data = ['testing' => true];
        $mockException = new ApiExceptionMock($data);

        $jsonString = json_encode($mockException);
        $jsonArray = json_decode($jsonString, true);

        $this->assertJson($jsonString);
        $this->assertInternalType('array', $jsonArray);
        $this->assertArrayHasKey('data', $jsonArray);
        $this->assertArrayHasKey('testing', $jsonArray['data']);
        $this->assertSame(true, $jsonArray['data']['testing']);

    }
}
