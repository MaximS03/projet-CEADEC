<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Nos formations - CADEC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
@include('partials.header')

<main>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Formations professionnelles de courte durée</h1>
        <p>
            Le CADEC propose des formations professionnelles de courte durée adaptées à divers secteurs d'activités.
            Ces formations visent à renforcer les compétences techniques et comportementales des jeunes, des professionnels
            et des organisations, dans le but de faciliter leur insertion ou réinsertion professionnelle.
        </p>

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
            renforcer ses compétences professionnelles. Vous pouvez choisir entre des formations en présentiel au CADEC
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
                <td>Développement personnel</td>
                <td>1er Octobre 2024</td>
                <td>31 Octobre 2024</td>
                <td>Présentiel - Lomé</td>
            </tr>
            <tr>
                <td>Gestion de projets</td>
                <td>1er Novembre 2024</td>
                <td>31 Décembre 2024</td>
                <td>Présentiel et en ligne</td>
            </tr>
            <tr>
                <td>Entrepreneuriat</td>
                <td>1er Janvier 2025</td>
                <td>31 Mars 2025</td>
                <td>En ligne</td>
            </tr>
            </tbody>
        </table>

        <div class="text-center mt-5">
            <a href="{{ url('/contact') }}" class="btn btn-primary">Inscrivez-vous maintenant</a>
        </div>
    </div>
</main>

@include('partials.footer')

{{--<script src="{{asset('js/script.js')}}"></script>--}}
</body>
</html>
