<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Réalisations - CADEC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/CADEC_icon.ico') }}" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
@include('partials.header')

<main>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Quelques réalisations du CADEC</h1>
        <p>
            Découvrez quelques réalisations et collaborations du CADEC avec différentes organisations et institutions
            pour le développement de compétences, la gouvernance locale et l'insertion socio-professionnelle.
        </p>

        <!-- Section des réalisations -->
        <div class="row">
            <!-- Réalisation 1 -->
            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://territoire.gouv.tg/vers-une-maitrise-de-la-gouvernance-locale-les-elus-locaux-et-personnels-administratifs-des-communes-tchamba-2-et-blitta-3-outilles-a-lamelioration-des-services-publics" target="_blank">
                        <img src="{{ asset('images/1.webp') }}" alt="Gouvernance locale">
                        <div class="text-lg font-bold capitalize">Maîtrise de la gouvernance locale</div>
                        <div>Renforcement des élus locaux et personnels administratifs des communes Tchamba 2 et Blitta 3.</div>
                    </a>
                </div>
            </div>

            <!-- Réalisation 2 -->
            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://m.facebook.com/photo.php?fbid=657205604403266&id=242805982509899&set=a.349183018538861" target="_blank">
                        <img src="{{ asset('images/2.webp') }}" alt="Facebook Réalisation">
                        <div class="text-lg font-bold capitalize">Formation à la gouvernance locale</div>
                        <div>Atelier de formation des responsables locaux sur la gouvernance locale et les services publics.</div>
                    </a>
                </div>
            </div>

            <!-- Réalisation 3 -->
            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://univ-kara.tg/actualites/les-etudiants-de-luniversite-de-kara-en-atelier" target="_blank">
                        <img src="{{ asset('images/3.webp') }}" alt="Université de Kara">
                        <div class="text-lg font-bold capitalize">Atelier à l'Université de Kara</div>
                        <div>Les étudiants de l’Université de Kara ont participé à un atelier sur l'insertion professionnelle.</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Autres réalisations -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://linterview.tg/2022/09/12/decentralisation-le-togo-veut-traduire-dans-les-faits-ses-fruits" target="_blank">
                        <img src="{{ asset('images/4.webp') }}" alt="Décentralisation Togo">
                        <div class="text-lg font-bold capitalize">Décentralisation au Togo</div>
                        <div>Efforts du Togo pour mettre en œuvre les résultats de la décentralisation et améliorer les services locaux.</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://loeildafrique.tg/emploi-et-insertion-socio-professionnelle-du-jeune-diplome" target="_blank">
                        <img src="{{ asset('images/5.webp') }}" alt="Emploi des jeunes diplômés">
                        <div class="text-lg font-bold capitalize">Insertion socio-professionnelle</div>
                        <div>Le CADEC accompagne les jeunes diplômés dans leur insertion socio-professionnelle.</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://radiokara.tg/universite-de-kara-des-etudiants-apprennent-a-mieux-entrer-dans-la-vie-professionnelle" target="_blank">
                        <img src="{{ asset('images/6.webp') }}" alt="Vie professionnelle">
                        <div class="text-lg font-bold capitalize">Vie professionnelle pour les étudiants</div>
                        <div>L'accompagnement des étudiants de l’Université de Kara pour leur entrée dans la vie professionnelle.</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</main>

@include('partials.footer')

</body>
</html>
