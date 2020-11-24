<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        view()->composer('*', function ($view) {
            if (Auth::user()) {
                $user = Auth::user();
                $userunreadnoti = $user->unreadNotifications;
                $userreadnoti = $user->readNotifications;

                $view->with('userunreadnoti', $userunreadnoti);
                $view->with('userreadnoti', $userreadnoti);


                $userunreadnoticount = auth()->user()->unreadNotifications()->count();

                $view->with('userunreadnoticount', $userunreadnoticount);
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
