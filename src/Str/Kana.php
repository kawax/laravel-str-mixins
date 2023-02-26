<?php

declare(strict_types=1);

namespace Revolution\Laravel\Mixins\Str;

class Kana
{
    public function __invoke(string $str, string $option = 'KV', string $encoding = 'UTF-8'): string
    {
        return mb_convert_kana($str, $option, $encoding);
    }
}
