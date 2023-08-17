<?php

declare(strict_types=1);

namespace Revolution\Laravel\Mixins\Stringable;

use Closure;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

class Japanese
{
    public function kana(): Closure
    {
        return function (string $option = 'KV', string $encoding = 'UTF-8'): Stringable {
            return new Stringable(Str::kana($this->value, $option, $encoding));
        };
    }

    public function textwrap(): Closure
    {
        return function (int $width = 10, string $break = PHP_EOL): Stringable {
            return new Stringable(Str::textwrap($this->value, $width, $break));
        };
    }

    public function truncate(): Closure
    {
        return function (int $limit = 100, string $end = '...'): Stringable {
            return new Stringable(Str::truncate($this->value, $limit, $end));
        };
    }
}
