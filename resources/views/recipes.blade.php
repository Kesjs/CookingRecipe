<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de Recherche de Recettes</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .recipe { margin-bottom: 20px; }
        .recipe img { width: 150px; height: auto; }
        .recipe-title { font-size: 1.5em; font-weight: bold; }
        .no-results { color: red; }
    </style>
</head>
<body>
    <h1>Résultats de Recherche</h1>

    @if(isset($recipes['results']) && count($recipes['results']) > 0)
        @foreach($recipes['results'] as $recipe)
            <div class="recipe">
                <p class="recipe-title">{{ $recipe['title'] }}</p>
                @if(isset($recipe['image']))
                    <img src="{{ $recipe['image'] }}" alt="{{ $recipe['title'] }}">
                @endif
            </div>
        @endforeach
    @else
        <p class="no-results">Aucune recette trouvée pour cette recherche.</p>
    @endif
</body>
</html>
