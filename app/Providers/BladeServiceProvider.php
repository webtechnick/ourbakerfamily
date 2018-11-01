<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Facades\Agent;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('admin', function() {
            if (Auth::guest()) {
                return false;
            }
            return Auth::user()->isAdmin();
        });

        Blade::if('prod', function() {
            return config('app.env') == 'production';
        });

        Blade::if('local', function() {
            return config('app.env') == 'local';
        });

        Blade::if('staging', function() {
            return config('app.env') == 'staging';
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
