<?php

namespace App\Providers;

use App\Models\Tournament;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::bind('tournament_slug', function ($value) {
            return Tournament::where('slug', $value)
                ->with('localizations')
                ->firstOrFail();
        });
    }
}
