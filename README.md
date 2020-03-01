# RecipeApi

**RecipeApi** is a wrapper for the [Spoonacular Recipe API](http://spoonacular.com/).

## Usage

E.g. `RecipeApi::recipes()->random()`

## Methods

Using the `RecipeApi` facade and `recipes()` method, the following recipe methods are available:

`random()` - returns a random recipe.

--------

You can also call `limited()` after any recipe method to return a simplified recipe that includes the following attributes:

```
title
cookingMinutes
readyInMinutes
glutenFree
dairyFree
vegetarian
vegan
extendedIngredients
id
imageType
analyzedInstructions
imageType
```
