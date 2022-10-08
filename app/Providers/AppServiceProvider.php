<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
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
        // dd(Filament::getContext('vendor-panel'));
        Filament::serving(
            function () {

                Filament::forContext('vendor-panel', function () {
                    Filament::registerUserMenuItems([
                        'logout' => UserMenuItem::make()->label('Log Out')->url(route('vendor.logout')),
                    ]);


                    // dd(Filament::getContext()->auth());
                });
            }
        );
    }
}
