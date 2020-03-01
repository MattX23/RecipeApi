<?php


namespace MattX23\RecipeApi\Api;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
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

    /**
     * @param $contents
     *
     * @return object
     */
    protected function toArray($contents): object
    {
        return json_decode($contents);
    }

    /**
     * @return \MattX23\RecipeApi\Entity\Recipe
     */
    public function getInspiredRecipe(): Recipe
    {
        $cache = Cache::store('redis')->get('getInspired');

        $contents = $cache ?: $this->getRandomRecipe();

        if (!$cache) Cache::store('redis')->add('getInspired', $contents, 3600);

        return new Recipe($contents->recipes);
    }

    /**
     * @return \MattX23\RecipeApi\Entity\Recipe
     */
    public function random(): Recipe
    {
        return new Recipe($this->getRandomRecipe());
    }

    /**
     * @return object
     */
    protected function getRandomRecipe(): object
    {
        $response = $this->client->get($this->domain.'/recipes/random?number=1&apiKey='.$this->apiKey);

        return $this->toArray($response->getBody()->getContents());
    }

    /**
     * @param int $id
     *
     * @return object
     */
    public function getRecipeById(int $id): object
    {
        $response = $this->client->get($this->domain.'/recipes/'.$id.'/information?apiKey='.$this->apiKey);

        return new Recipe($this->toArray($response->getBody()->getContents()));
    }
}
