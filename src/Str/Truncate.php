<?php

namespace Revolution\Laravel\Mixins\Str;

class Truncate
{
    /**
     * @param  string|null  $str
     * @param  int  $limit
     * @param  string  $end
     * @return string|null
     */
    public function __invoke(?string $str, int $limit = 100, string $end = '...'): ?string
    {
        if (mb_strlen($str, 'UTF-8') <= $limit) {
            return $str;
        }

        return rtrim(mb_substr($str, 0, $limit, 'UTF-8')).$end;
    }
}
