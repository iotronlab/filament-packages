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
        // Filament::getContext('vendor-panel')->serving(
        //     function () {
        //         // set the current app context.
        //         // Passing null or nothing sets the context to 'filament'
        //         // Filament::setContext('vendor-panel');
        //         //  dd(Filament::auth());

        //         $currentInstance = Filament::getContext();
        //         dd($currentInstance);
        //         if ($currentInstance == 'vendor-panel') {
        //             Filament::getContext('vendor-panel')->registerUserMenuItems([
        //                 'logout' => UserMenuItem::make()->label('Log Out')->url(route('vendor.logout')),
        //             ]);
        //             Filament::forContext('vendor-panel', function () {
        //                 Filament::auth(function () {
        //                     return auth()->guard('vendor');
        //                 });
        //             });
        //         }


        //         //  dd(Filament::auth());
        //     }
        // );
    }
}
