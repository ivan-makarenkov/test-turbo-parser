<?php

namespace App\Tests\TextHandler;

use App\TextHandler\StripTagsTextHandler;
use PHPUnit\Framework\TestCase;

class StripTagsTextHandlerTest extends TestCase
{
    public function testHandle()
    {
        $handler = new StripTagsTextHandler();
        $test = 'test string with <strong>number</strong> 323 i hope it <a href="/test">works</a>';
        $result = $handler->handle($test);

        $this->assertEquals('test string with number 323 i hope it works', $result);
    }
}
