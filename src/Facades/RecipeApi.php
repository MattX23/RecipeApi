<?php


namespace Mattx23\RecipeApi\Facades;

use Illuminate\Support\Facades\Facade;

class RecipeApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'recipeapi';
    }
}