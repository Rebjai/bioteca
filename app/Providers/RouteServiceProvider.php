<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for(
            'api',
            function (Request $request) {
                return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
            }
        );

        RateLimiter::for(
            'search',
            function (Request $request) {
                // dd($request->path());
                $key = $request->user()?->id ? $request->path().$request->user()?->id: $request->ip().$request->path();
                if (RateLimiter::tooManyAttempts($key, 2) ) {
                    return response('2many att', 420);
                    RateLimiter::clear($key);
                    RateLimiter::resetAttempts($key);
                }
                RateLimiter::hit($key, 1);
            }
        );
    }
}
