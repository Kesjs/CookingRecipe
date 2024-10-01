<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SpoonacularService
{
    public function fetchRandomRecipes($number = 5)
    {
        $response = Http::withHeaders([
            'x-api-key' => env('SPOONACULAR_API_KEY'),
        ])->get("https://api.spoonacular.com/recipes/random?number={$number}");

        return $response->json();
    }
}
