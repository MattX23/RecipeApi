<?php

namespace MattX23\RecipeApi;

use Illuminate\Support\ServiceProvider;

class RecipeApiServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/recipeapi.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('recipeapi.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('recipeapi');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('recipeapi',function() {

            $config = app(Repository::class);
            $domain = $config->get('recipeapi.domain');
            $apiKey = $config->get('recipeapi.apiKey');

            return new RecipeApi($domain, $apiKey);

        });


        $this->app->alias('recipeapi', RecipeApi::class);
    }
}