<?php

namespace Revolution\Laravel\Mixins\Str;

class Kana
{
    /**
     * @param  string|null  $str
     * @param  string  $option
     * @param  string  $encoding
     * @return callable
     */
    public function kana()
    {
        return fn(?string $str, string $option = 'KV', string $encoding = null) => mb_convert_kana($str, $option, $encoding ?? mb_internal_encoding());
    }
}
