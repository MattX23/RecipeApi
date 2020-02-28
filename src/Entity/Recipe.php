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
        $this->recipe = Arr::get($parameters,'recipes');
    }
}