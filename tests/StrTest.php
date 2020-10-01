<?php

namespace Tests;

use Illuminate\Support\Str;

class StrTest extends TestCase
{
    public function testStrWordWrap()
    {
        $text = Str::wordwrap('abcde', 3);

        $this->assertEquals("abc\nde", $text);
    }

    public function testStrKana()
    {
        $text = Str::kana('abｃあいうｱｲｳ', 'KVa');

        $this->assertEquals('abcあいうアイウ', $text);
    }
}
