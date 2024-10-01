<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SpoonacularService;

class RecipeController extends Controller
{
    protected $spoonacularService;

    public function __construct(SpoonacularService $spoonacularService)
    {
        $this->spoonacularService = $spoonacularService; // Injection du service
    }

    public function index()
{
    $recipes = $this->spoonacularService->fetchRandomRecipes(); // Appeler la méthode pour récupérer les recettes
    return view('recettephoto', compact('recipes')); // Passer les recettes à la vue
}

}
