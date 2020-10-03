<?php

namespace Revolution\Laravel\Mixins\Str;

class WordWrap
{
    /**
     * @param  string|null  $str
     * @param  int  $width
     * @param  string  $break
     *
     * @return callable
     */
    public function wordwrap()
    {
        return function (?string $str, int $width = 10, string $break = PHP_EOL) {
            return collect(mb_str_split($str, $width))->implode($break);
        };
    }
}
