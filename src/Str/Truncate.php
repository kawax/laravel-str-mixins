<?php

declare(strict_types=1);

namespace Revolution\Laravel\Mixins\Str;

class Truncate
{
    public function __invoke(?string $str, int $limit = 100, string $end = '...'): string
    {
        $str = $str ?? '';

        if (mb_strlen($str, 'UTF-8') <= $limit) {
            return $str;
        }

        return rtrim(mb_substr($str, 0, $limit, 'UTF-8')).$end;
    }
}
