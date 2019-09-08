<?php

namespace App\Tests\TextHandler;

use App\TextHandler\ReplaceSpacesToEolTextHandler;
use PHPUnit\Framework\TestCase;

class ReplaceSpacesToEolTextHandlerTest extends TestCase
{
    public function testHandle()
    {
        $handler = new ReplaceSpacesToEolTextHandler();
        $test = 'test string with number 323 i hope it works';
        $result = $handler->handle($test);

        $this->assertEquals("test\nstring\nwith\nnumber\n323\ni\nhope\nit\nworks", $result);
    }
}
