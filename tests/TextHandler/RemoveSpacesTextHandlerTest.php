<?php

namespace App\Tests\TextHandler;

use App\TextHandler\RemoveSpacesTextHandler;
use PHPUnit\Framework\TestCase;

class RemoveSpacesTextHandlerTest extends TestCase
{
    public function testHandle()
    {
        $handler = new RemoveSpacesTextHandler();
        $test = 'test string with number 323 i hope it works';
        $result = $handler->handle($test);

        $this->assertEquals('teststringwithnumber323ihopeitworks', $result);
    }
}
