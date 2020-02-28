<?php

namespace MattX23\RecipeApi;

use Illuminate\Support\Facades\Facade;

class RecipeApiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'recipeapi';
    }
}