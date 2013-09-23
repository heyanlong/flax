<?php
namespace Icecave\Flax\Serialization\Exception;

use Exception;
use PHPUnit_Framework_TestCase;

class ExceptionExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testException()
    {
        $previous = new Exception;
        $exception = new EncodeException('The message.', $previous);

        $this->assertSame('The message.', $exception->getMessage());
        $this->assertSame($previous, $exception->getPrevious());
    }
}
