<?php

namespace App\Providers;

use Artificertech\FilamentMultiContext\ContextServiceProvider;
use Filament\Facades\Filament;

class VendorPanelServiceProvider extends ContextServiceProvider
{
    public static string $name = 'vendor-panel';
}
