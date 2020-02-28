<?php


namespace MattX23\RecipeApi\Facades;

use Illuminate\Support\Facades\Facade;
/**
 * @method \MattX23\RecipeApi\RecipeApi random
 * @method \MattX23\RecipeApi\RecipeApi hello
 */

class RecipeApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        dd("facade");
        return 'recipeapi';
    }
}