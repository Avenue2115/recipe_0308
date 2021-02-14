<?php

namespace App\Providers;

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
        $this->app->bind('ModelDetail', \App\models\classes\ModalDetail::class);
        $this->app->bind('DateTime', function ($app) {
            return new \DateTime();
        });
        $this->app->bind('RecipeSummary', App\RecipeSummary::class);
        $this->app->bind('RecipeMaterial', App\RecipeMaterial::class);
        $this->app->bind('RecipeSteps', App\RecipeSteps::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
