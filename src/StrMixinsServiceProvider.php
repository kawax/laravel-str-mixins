<?php

namespace Revolution\Laravel\Mixins;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Revolution\Laravel\Mixins\Str\Kana;
use Revolution\Laravel\Mixins\Str\WordWrap;

class StrMixinsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Str::mixin(new WordWrap());
        Str::mixin(new Kana());
    }
}
