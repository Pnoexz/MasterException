<?php

/**
 * @author  Matias Pino <pnoexz@gmail.com>
 * @license GPL v3.0
 */

namespace Pnoexz\ApiExceptionTests;

class ApiExceptionTest extends \PHPUnit\Framework\TestCase
{
    public function testExtendsException()
    {
        $mockException = new class extends \Pnoexz\ApiException {};
        $this->assertInstanceOf('\Exception', $mockException);
    }

    public function testMantainsPreviousException()
    {

        $previousException = new \Exception('Previous');
        $mockException = new ApiExceptionMock([], $previousException);

        $this->assertInstanceOf('\Exception', $mockException->getPrevious());
    }
}
