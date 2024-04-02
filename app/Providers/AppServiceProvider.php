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
        // that strictness should only be present in a local environment.
        Model::shouldBeStrict(! app()->isProduction());

        // You don't need to add the $guarded property in every Model by providing unguard() in the Provider.
        Model::unguard();

    }
}
