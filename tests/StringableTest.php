<?php

namespace Tests;

use Illuminate\Support\Str;

class StringableTest extends TestCase
{
    public function testKana()
    {
        $text = Str::of('abｃあいうｱｲｳ')->kana('KVa')->value();

        $this->assertSame('abcあいうアイウ', $text);
    }

    public function testKanaTextWrap()
    {
        $text = Str::of('abｃあいうｱｲｳ')->kana('KVa')->textwrap(3)->value();

        $this->assertSame("abc\nあいう\nアイウ", $text);
    }

    public function testTruncate()
    {
        $text = Str::of('abcあいうえお')->truncate(5)->value();

        $this->assertSame('abcあい...', $text);
    }
}
