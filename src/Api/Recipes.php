<?php


namespace MattX23\RecipeApi\Api;

use GuzzleHttp\Client;
use MattX23\RecipeApi\Entity\Recipe;

class Recipes
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * @var string|null
     */
    protected $domain;

    /**
     * Jokes constructor.
     *
     * @param string $domain
     */
    public function __construct(string $domain = null)
    {
        $this->client = new Client();
        $this->domain = $domain;
    }

    /**
     * @return \MattX23\RecipeApi\Entity\Recipe
     */
    public function random()
    {
        $response = $this->client->get($this->domain.'');

        return new Recipe($response->getBody());
    }
}