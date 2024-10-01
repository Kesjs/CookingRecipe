<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cooking Recipe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">






        <!-- Styles -->

        <style>
            body {
                background-image: url('dg.jpeg');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
            }

            h2 {
                font-family: 'Kanit', sans-serif;
                font-size: 2.5rem;
                font-weight: 700;
                color: #333;
            }

            p {
                font-family: 'Space Grotesk', sans-serif;
            }


        .recipe-card {
            max-width: 350px;
            margin: 20px;
        }
        .recipe-card img {
            object-fit: cover;
            height: 200px;
            width: 100%;
        }
        .ingredients, .steps {
            display: none;
        }


        </style>
    </head>

    <body>
        <div class="container mt-5">
            <div class="bg-white p-5 rounded shadow-lg min-vh-100 mb-5">

                <!-- Navigation Bar with Collapse -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <!-- Logo -->
                        <a class="navbar-brand" href="/">
                            <img src="logo.png" alt="Logo" width="80" height="65">
                        </a>

                        <!-- Collapse Button (Hamburger icon) -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Collapsible Menu -->
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Accueil</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link  dropdown-toggle active bg-danger text-white px-2 rounded" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Recettes de cuisine
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="recettephoto">Recettes en photo</a></li>
                                        <li><a class="dropdown-item" href="diasporecette">Diasporama de recettes</a></li>
                                        <li><a class="dropdown-item" href="grandeclassique">Les grandes classiques</a></li>
                                        <li><a class="dropdown-item" href="microondes">Au micro ondes</a></li>
                                        <li><a class="dropdown-item" href="debutants">Pour débutants</a></li>
                                        <li><a class="dropdown-item" href="relaboree">Recettes élaborées</a></li>
                                        <li><a class="dropdown-item" href="rrapide">Recettes rapides</a></li>
                                        <li><a class="dropdown-item" href="rvege">Recettes vegétariènnes</a></li>
                                        <li><a class="dropdown-item" href="cuisinediet">Cuisine diététique</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCuisinePratique" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cuisine pratique
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownCuisinePratique">
                                        <li><a class="dropdown-item" href="fichecuisine">Fiche de cuisine</a></li>
                                        <li><a class="dropdown-item" href="trucas">Trucs et astuces</a></li>
                                        <li><a class="dropdown-item" href="mesurecuisine">Mesures et équivalences pour la cuisine</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="actucuisine">L'actu cuisine</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Search form -->
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-danger" type="submit">Search</button>
                        </form>
                    </div>
                </nav>

                <!-- Breadcrumb Section -->
                <nav style="background-color: #fff9db; margin-top: 20px" aria-label="breadcrumb" class="p-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Recettes en photo</li>
                    </ol>
                </nav>
                <h2 class="custom-title text-danger fs-3 fw-normal">Les dernières recettes</h2>

              <!-- Section des recettes -->
              <div class="row mt-4">
                <!-- Exemple de carte de recette -->
                <div class="col-md-4">
                    <div class="card recipe-card">
                        <img src="Image.jpeg" class="card-img-top recipe-image" alt="Image de la recette 1">
                        <div class="card-body">
                            <h5 class="card-title recipe-name" style="cursor:pointer;">Recettes de frites</h5>
                        <button type="button" class="btn btn-outline-danger">Obtenir la recette</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card recipe-card">
                        <img src="poulet-yassa-recette.jpg" class="card-img-top recipe-image" alt="Image de la recette 1">
                        <div class="card-body">
                            <h5 class="card-title recipe-name" style="cursor:pointer;">Poulet-yassa</h5>
                        <button type="button" class="btn btn-outline-danger">Obtenir la recette</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card recipe-card">
                        <img src="Dja-de-Georgiana-Viou.jpeg" class="card-img-top recipe-image" alt="Image de la recette 1">
                        <div class="card-body">
                            <h5 class="card-title recipe-name" style="cursor:pointer;">Dja-de-Georgiana-Viou</h5>
                        <button type="button" class="btn btn-outline-danger">Obtenir la recette</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card recipe-card">
                        <img src="Image.jpeg" class="card-img-top recipe-image" alt="Image de la recette 1">
                        <div class="card-body">
                            <h5 class="card-title recipe-name" style="cursor:pointer;">Recettes de frites</h5>
                        <button type="button" class="btn btn-outline-danger">Obtenir la recette</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card recipe-card">
                        <img src="Image.jpeg" class="card-img-top recipe-image" alt="Image de la recette 1">
                        <div class="card-body">
                            <h5 class="card-title recipe-name" style="cursor:pointer;">Recettes de frites</h5>
                        <button type="button" class="btn btn-outline-danger">Obtenir la recette</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card recipe-card">
                        <img src="Image.jpeg" class="card-img-top recipe-image" alt="Image de la recette 1">
                        <div class="card-body">
                            <h5 class="card-title recipe-name" style="cursor:pointer;">Recettes de frites</h5>
                        <button type="button" class="btn btn-outline-danger">Obtenir la recette</button>

                        </div>
                    </div>
                </div>

                <!-- Autres cartes de recettes -->


            </div>
        </div>
    </body>
</html>
