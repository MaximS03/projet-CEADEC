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

<div id="loader"
     style="position: fixed; width: 100%; height: 100vh; background: white; z-index: 9999; display: flex; justify-content: center; align-items: center;">
    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Chargement...</span>
    </div>
</div>

<main>
    <div class="container mt-4">
        <div class="realisation-home ">
            <h1 class="text-center mb-4">Quelques réalisations du promoteur du centre</h1>
            <p>
                Découvrez quelques réalisations du promoteur du centre avec différentes organisations et institutions
                pour le développement de compétences, la gouvernance locale et l'insertion socio-professionnelle.
            </p>
        </div>

        <!-- Section des réalisations -->
        <div class="row">
            <!-- Réalisation 1 -->
            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://radiokara.tg/universite-de-kara-des-etudiants-apprennent-a-mieux-entrer-dans-la-vie-professionnelle"
                       target="_blank">
                        <img src="{{ asset('images/6.webp') }}" alt="Vie professionnelle">
                        <div class="text-lg font-bold capitalize">Université de Kara : Des étudiants apprennent à mieux
                            entrer dans la vie professionnelle
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://loeildafrique.tg/emploi-et-insertion-socio-professionnelle-du-jeune-diplome"
                       target="_blank">
                        <img src="{{ asset('images/5.webp') }}" alt="Emploi des jeunes diplômés">
                        <div class="text-lg font-bold capitalize">Emploi et Insertion socio-professionnelle du jeune diplômé</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://univ-kara.tg/actualites/les-etudiants-de-luniversite-de-kara-en-atelier"
                       target="_blank">
                        <img src="{{ asset('images/3.webp') }}" alt="Université de Kara">
                        <div class="text-lg font-bold capitalize">Atelier à l'Université de Kara</div>
                        <div>Les étudiants de l’Université de Kara ont participé à un atelier sur l'insertion
                            professionnelle.
                        </div>
                    </a>
                </div>
            </div>


            <!-- Réalisation 2 -->
            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://m.facebook.com/photo.php?fbid=657205604403266&id=242805982509899&set=a.349183018538861"
                       target="_blank">
                        <img src="{{ asset('images/2.webp') }}" alt="Facebook Réalisation">
                        <div class="text-lg font-bold capitalize">Photo de famille de la 1ère promotion de l'Institut
                            Supérieur des Métiers d'Agriculture (ISMA) de
                            l'Université de Kara. Ici sur la photo, ils (30 étudiants) sont avec le Dr. Édouard KOUTODZO
                            qui a ouvert ce Master en Agribusiness,
                            Management et Marketing Agricole par l'UE intitulé Développement Personnel
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://territoire.gouv.tg/vers-une-maitrise-de-la-gouvernance-locale-les-elus-locaux-et-personnels-administratifs-des-communes-tchamba-2-et-blitta-3-outilles-a-lamelioration-des-services-publics"
                       target="_blank">
                        <img src="{{ asset('images/1.webp') }}" alt="Gouvernance locale">
                        <div class="text-lg font-bold capitalize">Vers une maîtrise de la gouvernance locale :Les élus
                            locaux et personnels administratifs des communes Tchamba 2 et Blitta 3 outillés à
                            l’amélioration des services publics
                        </div>
                    </a>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="realisation-card">
                    <a href="https://linterview.tg/2022/09/12/decentralisation-le-togo-veut-traduire-dans-les-faits-ses-fruits"
                       target="_blank">
                        <img src="{{ asset('images/4.webp') }}" alt="Décentralisation Togo">
                        <div class="text-lg font-bold capitalize">Décentralisation au Togo</div>
                        <div>Efforts du Togo pour mettre en œuvre les résultats de la décentralisation et améliorer les
                            services locaux.
                        </div>
                    </a>
                </div>
            </div>

            <!-- Réalisation 3 -->
        </div>
    </div>
</main>

@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>

<script type="text/javascript">
    window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 50)
    });
</script>

</body>
</html>
