<?php

namespace MattX23\RecipeApi;

use MattX23\RecipeApi\Api\Recipes;

class RecipeApi
{
    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    public $domain;

    public function __construct($domain, $apiKey)
    {
        $this->domain = $domain;
        $this->apiKey = $apiKey;
    }

    /**
     * @return \MattX23\RecipeApi\Api\Recipes
     */
    public function recipes(): Recipes
    {
        return new Recipes($this->domain, $this->apiKey);
    }
}