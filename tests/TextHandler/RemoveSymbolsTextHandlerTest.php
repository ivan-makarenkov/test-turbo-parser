<?php

namespace App\Tests\TextHandler;

use App\TextHandler\RemoveSymbolsTextHandler;
use PHPUnit\Framework\TestCase;

class RemoveSymbolsTextHandlerTest extends TestCase
{
    public function testHandle()
    {
        $handler = new RemoveSymbolsTextHandler();
        $test = 'test string with.,/!@#$%^&*() number 323 i hope it works';
        $result = $handler->handle($test);

        $this->assertEquals('test string with number 323 i hope it works', $result);
    }
}
