<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Bienvenue - CEADEC</title>
    <link rel="shortcut icon" href="{{ asset('images/CEADEC.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap"
          rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">

</head>

<body>
@include('partials.header')

<div id="loader" style="position: fixed; width: 100%; height: 100vh; background: white; z-index: 9999; display: flex; justify-content: center; align-items: center;">
    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only"></span>
    </div>
</div>

<main>
    <div id="publication-home" class="container-fluid ">
        <div class="h-50 w-50 d-flex flex-column justify-content-around">
        </div>
    </div>
    <div class="container mt-4">
{{--        <h1 class="text-center mb-4"></h1>--}}
{{--        <p class="text-center">--}}
{{--            --}}
{{--        </p>--}}

        <p>
            Retrouvez ici toutes les publications du CEADEC : articles, études de cas, rapports et autres documents utiles
            pour le développement des compétences et l’accompagnement professionnel.
        </p>
        <div class="row mt-20 d-flex justify-content-evenly">
            <div class="col-md-4">
                <select class="form-control" id="filterType">
                    <option value="all">Tous les types</option>
                    <option value="articles">Articles</option>
                    <option value="etudes">Études de cas</option>
                    <option value="rapports">Rapports</option>
                </select>
            </div>
            <div class="col-md-8">
                <input type="text" class="form-control" id="searchPublication" placeholder="Rechercher une publication...">
            </div>
        </div>

        <div class="row mt-20 d-flex justify-content-evenly">
            <!-- Publication 1 -->
            <div class="col-lg-4 col-md-6 col-12 publication-card" data-type="articles">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Titre de l'article 1</h5>
                        <p class="card-text">Cet article porte sur l'importance du développement des compétences pour les jeunes...</p>
                        <p><strong>Auteur :</strong> John Doe</p>
                        <p><strong>Date :</strong> 12 septembre 2024</p>
                        <a href="{{ asset('publications/article1.pdf') }}" target="_blank" class="btn btn-lg boutton-vers-page">Lire l'article</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 publication-card" data-type="etudes">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Étude de cas : L’impact de la formation professionnelle</h5>
                        <p class="card-text">Cette étude de cas analyse l'impact de la formation professionnelle sur l'emploi des jeunes...</p>
                        <p><strong>Auteur :</strong> Jane Doe</p>
                        <p><strong>Date :</strong> 20 août 2024</p>
                        <a href="{{ asset('publications/etude1.pdf') }}" target="_blank" class="btn btn-lg boutton-vers-page">Lire l'étude</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 publication-card" data-type="rapports">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Rapport sur les programmes de formation</h5>
                        <p class="card-text">Ce rapport présente les résultats des programmes de formation menés par le CEADEC en 2024...</p>
                        <p><strong>Auteur :</strong> CEADEC</p>
                        <p><strong>Date :</strong> 5 juillet 2024</p>
                        <a href="{{ asset('publications/rapport1.pdf') }}" target="_blank" class="btn btn-lg boutton-vers-page">Lire le rapport</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="{{asset('js/script.js')}}"></script>

<script type="text/javascript">
    window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 50)
    });
</script>
</body>
</html>
