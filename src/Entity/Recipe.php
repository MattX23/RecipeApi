<?php

namespace MattX23\RecipeApi\Entity;

use Illuminate\Support\Arr;

class Recipe
{
    public $recipe;

    public function __construct($parameters = [])
    {
        $this->recipe = Arr::get($parameters,'recipe');
    }
}