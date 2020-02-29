<?php

namespace MattX23\RecipeApi\Entity;

use Illuminate\Support\Arr;

class Recipe
{
    /**
     * @var array
     */
    public $recipe;

    public function __construct($parameters = [])
    {
        $fullRecipe = Arr::get($parameters,'recipes');

        $this->recipe = $fullRecipe[0];
    }
}