<?php

declare(strict_types=1);

namespace Revolution\Laravel\Mixins;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Revolution\Laravel\Mixins\Str\Kana;
use Revolution\Laravel\Mixins\Str\Truncate;
use Revolution\Laravel\Mixins\Str\WordWrap;

class StrMixinsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        Str::macro('wordwrap', new WordWrap());
        Str::macro('kana', new Kana());
        Str::macro('truncate', new Truncate());

        $this->fluent();
    }

    protected function fluent(): void
    {
        Stringable::macro('wordwrap', function (int $width = 10, string $break = PHP_EOL): static {
            /** @var Stringable $this */
            return new static(Str::wordwrap($this->value ?? '', $width,
                $break));
        });

        Stringable::macro('kana', function (string $option = 'KV', string $encoding = 'UTF-8'): static {
            /** @var Stringable $this */
            return new static(Str::kana($this->value ?? '', $option,
                $encoding));
        });

        Stringable::macro('truncate', function (int $limit = 100, string $end = '...'): static {
            /** @var Stringable $this */
            return new static(Str::truncate($this->value ?? '', $limit, $end));
        });
    }
}
