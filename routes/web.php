<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recettephoto', function () {
    return view('recettephoto');
});

Route::get('/recettes', [RecipeController::class, 'index']);


Route::get('/diasporecette', function () {
    return view('diasporecette');
});

Route::get('/relaboree', function () {
    return view('relaboree');
});

Route::get('/debutants', function () {
    return view('debutants');
});

Route::get('/microondes', function () {
    return view('microondes');
});

Route::get('/grandeclassique', function () {
    return view('grandeclassique');
});
Route::get('/cuisinediet', function () {
    return view('cuisinediet');
});
Route::get('/rvege', function () {
    return view('rvege');
});
Route::get('/rrapide', function () {
    return view('rrapide');
});

Route::get('/mesurecuisine', function () {
    return view('mesurecuisine');
});
Route::get('/trucas', function () {
    return view('trucas');
});
Route::get('/fichecuisine', function () {
    return view('fichecuisine');
});
Route::get('/actucuisine', function () {
    return view('actucuisine');
});


// Route pour afficher les recettes en photo
Route::get('/recettephoto', function () {
    // Logique pour récupérer les recettes
    $recettes = []; // Remplace cela par la logique de récupération des recettes

    return view('recettephoto', compact('recettes'));
})->name('recettephoto.index');

// Route pour rechercher des recettes
Route::get('/recettephoto/search', function (Illuminate\Http\Request $request) {
    $searchTerm = $request->input('query');

    // Logique pour rechercher des recettes basées sur $searchTerm
    $recettes = []; // Remplace cela par la logique de recherche des recettes

    return view('recettephoto', compact('recettes'));
})->name('recettephoto.search');
Route::get('/recettes', function () {
    // Logique pour obtenir des recettes aléatoires
    $recettes = []; // Remplace cela par la logique de récupération des recettes aléatoires

    return view('recettes', compact('recettes'));
})->name('recettes.index');

// Route pour obtenir les détails d'une recette spécifique
Route::get('/recettephoto/{id}', function ($id) {
    // Logique pour obtenir les détails de la recette avec l'ID $id
    $recette = []; // Remplace cela par la logique de récupération des détails de la recette

    return view('recettephoto', compact('recette'));
})->name('recettephoto.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
