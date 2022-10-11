<?php

namespace App\Providers;

use Iotronlab\FilamentMultiGuard\ContextServiceProvider;
use Filament\Facades\Filament;

class VendorPanelServiceProvider extends ContextServiceProvider
{
    public static string $name = 'vendor-panel';
}
