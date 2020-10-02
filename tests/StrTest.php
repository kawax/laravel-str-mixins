<?php

namespace Tests;

use Illuminate\Support\Str;

class StrTest extends TestCase
{
    public function testStrWordWrap()
    {
        $this->assertEquals("abc\nde", Str::wordwrap('abcde', 3));
        $this->assertEquals("あいう\nえお", Str::wordwrap('あいうえお', 3));
        $this->assertEquals("あい\nう\n\nえお", Str::wordwrap("あいう\nえお", 2));
    }

    public function testStrKana()
    {
        $text = Str::kana('abｃあいうｱｲｳ', 'KVa');

        $this->assertEquals('abcあいうアイウ', $text);
    }
}
