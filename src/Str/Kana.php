<?php

namespace Revolution\Laravel\Mixins\Str;

class Kana
{
    /**
     * @param  string|null  $str
     * @param  string  $option
     * @param  string  $encoding
     *
     * @return callable
     */
    public function kana()
    {
        return function (?string $str, string $option = 'KV', string $encoding = null) {
            return mb_convert_kana($str, $option, $encoding ?? mb_internal_encoding());
        };
    }
}
