<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * Remove guards against the model only when serving with Filament
         * According to the documentation: https://filamentphp.com/docs/3.x/panels/getting-started#unguarding-all-models
         * Not ideal, because this will remove the guards for the whole application and not only for Filament
         * Better solution would be placing this into the Filament/AdminPanelProvider
         * Another solution is to use forceFill/forceCreate on the create/update to bypass fillables
         */
        // Model::unguard();
    }
}
