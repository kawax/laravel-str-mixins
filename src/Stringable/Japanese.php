<?php

namespace Revolution\Laravel\Mixins\Stringable;

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

class Japanese
{
    /**
     * @param  string  $option
     * @param  string  $encoding
     * @return callable
     */
    public function kana()
    {
        return fn (string $option = 'KV', string $encoding = null) => new Stringable(Str::kana($this->value, $option, $encoding));
    }

    /**
     * @param  int  $width
     * @param  string  $break
     * @return callable
     */
    public function wordwrap()
    {
        return fn (int $width = 10, string $break = PHP_EOL) => new Stringable(Str::wordwrap($this->value, $width, $break));
    }
}
