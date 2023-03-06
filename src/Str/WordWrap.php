<?php

declare(strict_types=1);

namespace Revolution\Laravel\Mixins\Str;

class WordWrap
{
    public function __invoke(?string $str, int $width = 10, string $break = PHP_EOL): string
    {
        return implode($break, mb_str_split($str ?? '', $width));
    }
}
