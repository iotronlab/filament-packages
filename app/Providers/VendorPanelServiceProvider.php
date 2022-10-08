<?php

namespace App\Providers;

use Artificertech\FilamentMultiContext\ContextServiceProvider;
use Filament\Facades\Filament;

class VendorPanelServiceProvider extends ContextServiceProvider
{
    public static string $name = 'vendor-panel';

    // public function boot()
    // {
    //     // dd(Filament::currentContext());

    //     Filament::getContext(static::$name)->serving(
    //         function () {
    //             // set the current app context.
    //             // Passing null or nothing sets the context to 'filament'
    //             // Filament::setContext(static::$name);
    //         }
    //     );
    // }

    public function packageRegistered(): void
    {
        $this->app->booting(function () {
            $this->registerComponents();
        });

        $this->app->resolving('filament', function () {
            Filament::addContext(static::$name);

            Filament::forContext(static::$name, function () {
                Filament::registerPages($this->getPages());
                Filament::registerResources($this->getResources());
                Filament::registerWidgets($this->getWidgets());
                Filament::auth(function () {
                    return auth()->guard('vendor');
                });
            });
        });
    }
}
