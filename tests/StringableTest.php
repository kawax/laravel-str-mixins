<?php

namespace Tests;

use Illuminate\Support\Str;

class StringableTest extends TestCase
{
    public function testKana()
    {
        $text = Str::of('abｃあいうｱｲｳ')->kana('KVa');

        // $textはStringable ObjectなのでassertSame()ではなくassertEquals()を使う
        $this->assertEquals('abcあいうアイウ', $text);
    }

    public function testKanaWordWrap()
    {
        $text = Str::of('abｃあいうｱｲｳ')->kana('KVa')->wordwrap(3);

        $this->assertEquals("abc\nあいう\nアイウ", $text);
    }
}
