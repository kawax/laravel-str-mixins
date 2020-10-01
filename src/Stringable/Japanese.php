<?php

namespace Revolution\Laravel\Mixins\Stringable;

use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

class Japanese
{
    /**
     * @param  string  $option
     * @param  string  $encoding
     *
     * @return callable
     */
    public function kana()
    {
        return function (string $option = 'KV', string $encoding = null) {
            return new Stringable(Str::kana($this->value, $option, $encoding));
        };
    }

    /**
     * @param  int  $width
     * @param  string  $break
     *
     * @return callable
     */
    public function wordwrap()
    {
        return function (int $width = 10, string $break = PHP_EOL) {
            return new Stringable(Str::wordwrap($this->value, $width, $break));
        };
    }
}
