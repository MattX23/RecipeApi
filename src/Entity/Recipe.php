<?php

namespace MattX23\RecipeApi\Entity;

use Illuminate\Support\Arr;

class Recipe
{
    public $recipe;

    public function __construct($parameters = [])
    {
        dd("yo");
        $this->recipe = Arr::get($parameters,'recipe');
    }
}