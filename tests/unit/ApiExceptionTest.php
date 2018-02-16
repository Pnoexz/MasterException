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
    public function testExtendsException()
    {
        $mockException = new class extends ApiException {};
        $this->assertInstanceOf('\Exception', $mockException);
    }

    public function testMantainsPreviousException()
    {

        $previousException = new \Exception('Previous');
        $mockException = new ApiExceptionMock([], $previousException);

        $this->assertInstanceOf('\Exception', $mockException->getPrevious());
    }

    public function testCanHandleDataInConstructor()
    {
        $data = ['testing' => true];
        $mockException = new ApiExceptionMock($data);

        $this->assertSame($data, $mockException->getData());
    }

    public function testCanSetDataWithMethod()
    {
        $data = ['testing' => true];
        $mockException = new ApiExceptionMock();
        $mockException->setData($data);

        $this->assertSame($data, $mockException->getData());
    }

    public function testCanAppendDataWithMethod()
    {
        $data = ['testing' => true];
        $dataToAppend = ['foo' => 'bar'];
        $mockException = new ApiExceptionMock($data);
        $mockException->appendData($dataToAppend);

        $expectedData = array_merge($data, $dataToAppend);

        $this->assertSame($expectedData, $mockException->getData());
    }

    public function testExceptionCanBeCastedToString()
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

    public function testCanRetrieveHttpStatus()
    {
        /** @var ApiException $mockException */
        $mockException = new class extends ApiException {
            protected $httpStatus = 201;
        };

        $this->assertSame(201, $mockException->getHttpStatus());
    }

    public function testCanRetrieveLevel()
    {
        /** @var ApiException $mockException */
        $mockException = new class extends ApiException {
            protected $level = LogLevel::WARNING;
        };

        $this->assertSame(LogLevel::WARNING, $mockException->getLevel());
    }

    public function testCanBeJsonEncoded()
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

    public function testDataIsAlsoExportedToJson()
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
