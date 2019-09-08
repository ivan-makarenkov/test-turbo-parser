<?php

namespace App\Tests\TextHandler;

use App\TextHandler\ToNumberTextHandler;
use PHPUnit\Framework\TestCase;

class ToNumberTextHandlerTest extends TestCase
{
    public function testHandle()
    {
        $handler = new ToNumberTextHandler();
        $test = 'test string with number 323 i hope it works';
        $result = $handler->handle($test);

        $this->assertEquals(323, $result);
    }
}
