<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Nos services - CEADEC</title>
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
    <section class="services-intro">
        <div class="container">
            <h1>Nos Services</h1>
            <p>Le CEADEC offre une gamme de services visant à accompagner les jeunes et les professionnels dans leur développement personnel et professionnel. Nous proposons des formations, des conseils et des accompagnements sur mesure pour répondre aux besoins spécifiques de chaque individu et institution.</p>
        </div>
    </section>
    <section class="service">
        <div class="container">
            <h2>Sensibilisation & Plaidoyer</h2>
            <p>Nous promouvons l'importance du développement personnel et professionnel, ainsi que la valorisation de l'approche par compétences. Nous sensibilisons les jeunes, les institutions et le public à travers diverses campagnes et initiatives.</p>
        </div>
        <div class="container">
            <h2>Études & Appui-Conseil/Accompagnement</h2>
            <h3>Accompagnement pour la connaissance de soi</h3>
            <p>Nous aidons les individus à réaliser leur autodiagnostic afin d'identifier leurs forces, faiblesses, opportunités et menaces, facilitant ainsi leur développement personnel.</p>

            <h3>Accompagnement pour le développement personnel</h3>
            <p>Nous accompagnons les participants dans l’élaboration de leur plan de développement personnel, en mettant l’accent sur leurs compétences comportementales et techniques.</p>

            <h3>Accompagnement pour l’élaboration d’un plan de carrière</h3>
            <p>Nous aidons les participants à établir un plan de carrière détaillé en fonction de leurs objectifs professionnels et de leur reconversion éventuelle.</p>

            <h3>Accompagnement pour l’insertion professionnelle</h3>
            <p>Le CEADEC offre un suivi pour la professionnalisation des jeunes, facilitant leur accès à des stages et des opportunités d'emploi.</p>

            <h3>Appui-Accompagnement aux institutions</h3>
            <p>Nous offrons un accompagnement aux institutions locales pour améliorer leur contribution au développement de leurs communautés, notamment à travers des formations, du coaching, et du mentoring.</p>
        </div>
        <div class="container">
            <h2>Formations Professionnelles de Courte Durée</h2>
            <p>Nos formations, d’une durée de 1 à 3 mois, sont conçues pour permettre aux participants de développer des compétences spécifiques adaptées aux besoins du marché du travail. Les formations sont disponibles en mode résidentiel, en ligne, ou à la carte.</p>
        </div>
        <section class="contact-cta">
            <div class="container text-center">
                <h2>Besoin de plus d'informations ?</h2>
                <p>Contactez-nous pour en savoir plus sur nos services ou pour discuter de vos besoins spécifiques.</p>
                <a href="{{url('/contact')}}" class="btn btn-lg boutton-vers-page">Nous Contacter</a>
            </div>
        </section>
    </section>


</main>

@include('partials.footer')

{{--<script src="{{asset('js/script.js')}}"></script>--}}
</body>
</html>
