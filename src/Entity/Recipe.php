<?php

namespace MattX23\RecipeApi\Entity;

use Illuminate\Support\Arr;
use stdClass;

class Recipe
{
    /**
     * @var object
     */
    public $recipe;

    public function __construct($parameters = [])
    {
        $spoonacularRecipe = collect(Arr::get($parameters,'0'));

        $recipe = new stdClass;

        $recipe->cookingMinutes = Arr::get($spoonacularRecipe,'cookingMinutes');
        $recipe->readyInMinutes = Arr::get($spoonacularRecipe,'readyInMinutes');
        $recipe->glutenFree = Arr::get($spoonacularRecipe,'glutenFree');
        $recipe->dairyFree = Arr::get($spoonacularRecipe,'dairyFree');
        $recipe->vegetarian = Arr::get($spoonacularRecipe,'vegetarian');
        $recipe->vegan = Arr::get($spoonacularRecipe,'vegan');
        $recipe->extendedIngredients = Arr::get($spoonacularRecipe,'extendedIngredients');
        $recipe->id = Arr::get($spoonacularRecipe,'id');
        $recipe->imageType = Arr::get($spoonacularRecipe,'imageType');
        $recipe->analyzedInstructions = Arr::get($spoonacularRecipe,'analyzedInstructions');

        $this->recipe = $recipe;
    }
}
