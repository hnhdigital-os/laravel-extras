<?php

namespace Bluora\LaravelExtras;

use Blade;
use Illuminate\Support\ServiceProvider;

class BladeDirectiveServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        blade::directive('capturestart', function () {
            return '<?php ob_start(); ?>';
        });

        blade::directive('capturestop', function ($name) {
            $name = str_replace('$', '', $name);
            $name = substr($name, 1, -1);

            return '<?php $'.$name.' = ob_get_clean(); ?>';
        });

        blade::directive('call', function ($call) {
            $call = substr($call, 1, -1);

            return "<?php $call; ?>";
        });

        blade::directive('csrf', function () {
            return '<?= csrf_field(); ?>';
        });

        blade::directive('raw', function ($raw) {
            return "<?php $raw; ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
