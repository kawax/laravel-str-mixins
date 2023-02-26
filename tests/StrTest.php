<?php

namespace Tests;

use Illuminate\Support\Str;

class StrTest extends TestCase
{
    public function testStrWordWrap()
    {
        $this->assertSame("abc\nde", Str::wordwrap('abcde', 3));
        $this->assertSame("あいう\nえお", Str::wordwrap('あいうえお', 3));
        $this->assertSame("あい\nう\n\nえお", Str::wordwrap("あいう\nえお", 2));
        $this->assertSame("ｱｲｳ\nｴｵ", Str::wordwrap('ｱｲｳｴｵ', 3));
    }

    public function testStrKana()
    {
        $text = Str::kana('abｃあいうｱｲｳ', 'KVa');

        $this->assertSame('abcあいうアイウ', $text);
    }

    public function testStrTruncate()
    {
        $this->assertSame('abcあいうえお', Str::truncate(str: 'abcあいうえお'));
        $this->assertSame('abcあいうえ...', Str::truncate(str: 'abcあいうえお', limit: 7));
        $this->assertSame('abcあいう___', Str::truncate(str: 'abcあいうえお', limit: 6, end: '___'));
        $this->assertSame('abcあい...', Str::limit('abcあいうえお', 7));
    }
}
