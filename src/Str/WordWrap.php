<?php

namespace Revolution\Laravel\Mixins\Str;

use Illuminate\Support\Str;

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
            return Str::of($str)
                ->split('/\B/u')
                ->chunk($width)
                ->mapSpread(
                    function (...$strings) {
                        return tap(collect($strings))->pop()->implode('');
                    }
                )->implode($break);
        };
    }
}
