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
        </style>
    </head>

    <body>
        <div class="container mt-5">
            <div class="bg-white p-5 rounded shadow-lg min-vh-100 mb-5">
                <!-- Header Section -->
                <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                    <div class="col-md-3 mb-2 mb-md-0">
                        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                            <img src="logo.png" alt="" class="bi" width="80" height="65">
                        </a>
                    </div>
                    <!-- Search form -->
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form>
                </header>



                <!-- Navigation Menu -->
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/" class="nav-link px-2 text-black rounded">Acceuil</a></li>
                    <div class="dropdown">
                        <button class="btn btn-danger nav-link active px-2 bg-danger text-white rounded dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Recettes de cuisine
                        </button>
                        <ul class="dropdown-menu">
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
                    </div>
                    <div class="dropdown">
                        <button class="btn nav-link px-2 text-black rounded dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cuisine pratique
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="fichecuisine">Fiche de cuisine</a></li>
                            <li><a class="dropdown-item" href="trucas">Trucs et astuces</a></li>
                            <li><a class="dropdown-item" href="mesurecuisine">Mesures et équivalences pour la cuisine</a></li>
                          </ul>
                    </div>
                    <li><a href="actucuisine" class="nav-link px-2 text-black rounded">L'actu cuisine</a></li>
                </ul>

                 <!-- Breadcrumb Section -->
                 <nav style="background-color: #fff9db; margin-top: 20px" aria-label="breadcrumb" class="p-2  ">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="cuisinediet"></a>Cuisine diététique</li>

                    </ol>
                </nav>
            </div>
        </div>
    </body>
</html>
