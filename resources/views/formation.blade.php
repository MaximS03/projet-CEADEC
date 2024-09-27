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
        <span class="sr-only">Chargement...</span>
    </div>
</div>

<main>
    <div class="formation-home">
    </div>
    <div class="container mt-4">

        <h2 class="mt-5">Liste des formations disponibles</h2>
        <ul class="list-group">
            <li class="list-group-item">
                <h4>Formation en développement personnel</h4>
                <p>
                    Cette formation vise à améliorer la connaissance de soi, à renforcer l'estime de soi et à développer
                    des compétences personnelles pour une meilleure gestion de carrière et de vie.
                </p>
                <p><strong>Durée :</strong> 1 mois</p>
            </li>
            <li class="list-group-item">
                <h4>Formation en gestion de projets</h4>
                <p>
                    Apprenez à gérer efficacement des projets avec des outils modernes et des méthodes éprouvées. Cette
                    formation s'adresse aux personnes désirant améliorer leurs compétences en gestion de projets.
                </p>
                <p><strong>Durée :</strong> 2 mois</p>
            </li>
            <li class="list-group-item">
                <h4>Formation en entrepreneuriat</h4>
                <p>
                    Une formation pratique pour les jeunes entrepreneurs visant à développer leurs compétences en
                    gestion d'entreprise, marketing et planification financière.
                </p>
                <p><strong>Durée :</strong> 3 mois</p>
            </li>
        </ul>

        <h2 class="mt-5" id="modalite_inscription">Modalités d'inscription</h2>
        <p>
            Les formations sont ouvertes à tous les jeunes diplômés, entrepreneurs, employés et toute personne souhaitant
            renforcer ses compétences professionnelles. Vous pouvez choisir entre des formations en présentiel au CEADEC
            ou des formations en ligne accessibles partout dans le monde.
        </p>

        <h2 class="mt-5">Calendrier des formations à venir</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Formation</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Lieu</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-label="Formation">Développement personnel</td>
                <td data-label="Date de début">1er Octobre 2024</td>
                <td data-label="Date de fin">31 Octobre 2024</td>
                <td data-label="Lieu">Présentiel - Lomé</td>
            </tr>
            <tr>
                <td data-label="Formation">Gestion de projets</td>
                <td data-label="Date de début">1er Novembre 2024</td>
                <td data-label="Date de fin">31 Décembre 2024</td>
                <td data-label="Lieu">Présentiel et en ligne</td>
            </tr>
            <tr>
                <td data-label="Formation">Entrepreneuriat</td>
                <td data-label="Date de début">1er Janvier 2025</td>
                <td data-label="Date de fin">31 Mars 2025</td>
                <td data-label="Lieu">En ligne</td>
            </tr>
            </tbody>
        </table>


        <div class="text-center mt-5 mb-2">
            <a href="{{ url('/contact') }}" class="btn btn-primary">Inscrivez-vous maintenant</a>
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
</script>
</body>
</html>
