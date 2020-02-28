<?php

namespace MattX23\RecipeApi;

use MattX23\RecipeApi\Entity\Recipe;

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

    public function hello()
    {
        return "Hello";
    }

    public function recipes()
    {
        return new Recipe($this->domain);
    }
}