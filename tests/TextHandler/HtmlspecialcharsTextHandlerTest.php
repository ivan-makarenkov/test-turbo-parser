<?php

namespace App\Tests\TextHandler;

use App\TextHandler\HtmlspecialcharsTextHandler;
use PHPUnit\Framework\TestCase;

class HtmlspecialcharsHandlerTest extends TestCase
{
    public function testHandle()
    {
        $handler = new HtmlspecialcharsTextHandler();
        $test = 'test string with <b>number</b> 323 i hope & it works';
        $result = $handler->handle($test);

        $this->assertEquals('test string with &lt;b&gt;number&lt;/b&gt; 323 i hope &amp; it works', $result);
    }
}
