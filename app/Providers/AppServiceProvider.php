<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
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
        //
        Model::unguard(); // Permet de désactiver la protection des modèles Eloquent
        //::preventLazyLoading(! app()->isProduction()); // Empêche le chargement paresseux des relations en production
        // Model::automaticallyEagerLoadRelationships();
    }
}
