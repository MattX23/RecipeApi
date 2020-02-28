<?php


namespace MattX23\RecipeApi\Api;

use GuzzleHttp\Client;
use MattX23\RecipeApi\Entity\Recipe;

class Recipes
{
    /**
     * @var string|null
     */
    protected $apiKey;

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * @var string|null
     */
    protected $domain;

    /**
     * Recipes constructor.
     *
     * @param string|null $domain
     * @param string|null $apiKey
     */
    public function __construct(string $domain = null, string $apiKey = null)
    {
        $this->apiKey = $apiKey;
        $this->client = new Client();
        $this->domain = $domain;
    }

    protected function toArray($contents)
    {
        return json_decode($contents);
    }

    /**
     * @return \MattX23\RecipeApi\Entity\Recipe
     */
    public function random()
    {
        $response = $this->client->get($this->domain.'/recipes/random?number=1&apiKey='.$this->apiKey);

        $contents = $this->toArray($response->getBody()->getContents());

        return new Recipe($contents);
    }
}