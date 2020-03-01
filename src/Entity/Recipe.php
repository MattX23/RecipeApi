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

    /**
     * Recipe constructor.
     *
     * @param array $parameters
     */
    public function __construct($parameters = [])
    {
        $recipe = isset($parameters->recipes) ? $parameters->recipes : $parameters;

        if (!is_array($recipe)) $recipe = array($recipe);

        $this->recipe = collect(Arr::get($recipe,'0'));
    }

    /**
     * Return a simplified version of the recipe
     *
     * @return self
     */
    public function limited(): self
    {
        $recipe = new stdClass;

        $spoonacularRecipe = $this->recipe;

        $recipe->title = Arr::get($spoonacularRecipe,'title');
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
        $recipe->imageType = Arr::get($spoonacularRecipe,'imageType');

        return new self(array($recipe));
    }
}
