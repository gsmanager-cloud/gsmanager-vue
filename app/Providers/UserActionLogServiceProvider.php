<?php

namespace App\Providers;

use GSManager\Cache\RateLimiting\Limit;
use GSManager\Http\Request;
use GSManager\Support\Facades\RateLimiter;
use GSManager\Support\ServiceProvider;

class UserActionLogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        RateLimiter::for('log-action', function (Request $request) {
            return Limit::perMinute(30)->by($request->ip());
        });
    }
}
