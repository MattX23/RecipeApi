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

    public function recipes()
    {
        return new Recipes($this->domain, $this->apiKey);
    }
}