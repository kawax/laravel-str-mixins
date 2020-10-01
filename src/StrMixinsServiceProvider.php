<?php

namespace Revolution\Laravel\Mixins;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;
use Revolution\Laravel\Mixins\Str\Kana;
use Revolution\Laravel\Mixins\Str\WordWrap;
use Revolution\Laravel\Mixins\Stringable\Japanese;

class StrMixinsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Stringable::mixin(new Japanese());

        Str::mixin(new WordWrap());
        Str::mixin(new Kana());
    }
}
