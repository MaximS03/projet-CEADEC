<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Publications - CEADEC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/CEADEC.ico') }}" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
@include('partials.header')

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
        <div class="row mb-4">
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

        <div class="row">
            <!-- Publication 1 -->
            <div class="col-md-4 mb-4 publication-card" data-type="articles">
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

            <div class="col-md-4 mb-4 publication-card" data-type="etudes">
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

            <div class="col-md-4 mb-4 publication-card" data-type="rapports">
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

{{--<script src="{{asset('js/script.js')}}"></script>--}}
</body>
</html>
