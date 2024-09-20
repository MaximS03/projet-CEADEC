<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>A propos - CEADEC</title>
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
    <div id="presentation-home" class="container-fluid ">
        <div class="d-flex flex-column justify-content-around presentation-home-element" style="">
            <div>
                <h1>CEADEC : </h1>
                <p>Centre d’Appui au Développement des Compétences</p>
            </div>

            <div class="">
                <a href="{{url('#qui_sommes_nous')}}" class="btn btn-outline-primary btn-lg" style="margin-bottom: 10px">Qui sommes-nous ?</a>
                <a href="{{url('#')}}" class="btn btn-outline-primary btn-lg">Que faisons-nous ?</a>
            </div>
        </div>
    </div>

    <section class="container container-fluid presentation">

        <div class="d-flex flex-column justify-content-center" id="qui_sommes_nous" style="margin-bottom: 2rem">
            <h2>Pourquoi un Centre d’Appui au Développement des Compétences ?</h2>
            <p>
                Le Togo, comme beaucoup de pays africains, fait face à des défis sociaux importants, notamment en matière de
                chômage et de développement des jeunes. Beaucoup de diplômés sortent des universités sans les compétences
                requises pour le marché du travail, ce qui augmente le taux de chômage. Le CEADEC a pour objectif de remédier
                à cette situation en développant les compétences comportementales et techniques des jeunes, facilitant ainsi
                leur insertion professionnelle.
            </p>
        </div>

        <div class="row" id="presentation_learn_more" style="margin-bottom: 2rem">
            <div class="col">
                <h2>Notre Vision</h2>
                <p>
                    Notre vision est de faire du Togo un pays où les jeunes identifient leurs potentialités, planifient leur vie
                    tant sur le plan personnel que professionnel, et développent les compétences nécessaires pour intégrer la
                    vie professionnelle plus facilement.
                </p>
            </div>

            <div class="col">
                <h2>Notre Mission</h2>
                <p>
                    La mission du CEADEC est de faciliter le développement des compétences comportementales et techniques des
                    jeunes afin d’accroître leur employabilité et leur insertion professionnelle.
                </p>
            </div>

            <div class="col">
                <h2>Objectifs du CEADEC</h2>
                <ul>
                    <li>Contribuer au développement personnel des jeunes</li>
                    <li>Faciliter la planification de carrière</li>
                    <li>Faciliter la professionnalisation et l’insertion professionnelle</li>
                    <li>Accompagner les jeunes dans la mise en œuvre de leur plan de carrière</li>
                </ul>
            </div>
        </div>

        <div>
            <h2>Nos Services</h2>
            <p>
                Le CEADEC offre divers services, notamment :
            </p>
            <ul>
                <li>Sensibilisation et plaidoyer sur l’importance du développement de la personnalité et de la planification
                    de carrière
                </li>
                <li>Accompagnement pour la connaissance de soi et l’élaboration de plans de carrière</li>
                <li>Formation des jeunes pour augmenter leur employabilité</li>
                <li>Appui-conseil aux institutions pour promouvoir leur développement</li>
            </ul>
        </div>

        <a href="{{ url('/contact') }}" class="btn btn-primary">Nous contacter</a>
    </section>

    <section id="">

    </section>


    {{--        Le Centre d’Appui au Développement des Compétences (CEADEC) est une nouvelle initiative fondée pour répondre aux besoins croissants de développement des compétences dans le monde professionnel. Situé à Lomé, au Togo, le CEADEC se consacre à offrir des solutions de formations innovantes et adaptées aux défis actuels du marché du travail.--}}
    {{--        Notre mission est de doter les individus et les entreprises des outils nécessaires pour réussir dans un environnement en constante évolution. Nous croyons fermement que l'éducation et la formations sont les clés du progrès et de l'innovation. C’est pourquoi nous proposons une gamme de services, allant des formations professionnelles de courte durée aux programmes d'incubation pour les entrepreneurs.--}}
    {{--        En tant qu'organisation naissante, notre vision est de devenir un acteur incontournable dans le domaine de la formations et de l'accompagnement des entreprises, tant au niveau national qu'international. Nous sommes engagés à bâtir un avenir où les compétences et l'expertise locales sont reconnues et valorisées, contribuant ainsi au développement économique et social de notre région.--}}

</main>

@include('partials.footer')

{{--<script src="{{asset('js/script.js')}}"></script>--}}
</body>
</html>
