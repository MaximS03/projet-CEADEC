<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Bienvenue - CEADEC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/CEADEC.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Arsenal:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>

<body>
@include('partials.header')

<div id="loader" style="position: fixed; width: 100%; height: 100vh; background: white; z-index: 9999; display: flex; justify-content: center; align-items: center;">
    <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only"></span>
    </div>
</div>
<main>
    <div id="home" class="container-fluid">
        <div class="home_text">
            <h1 style="font-size: 40px;">Bienvenue au CEADEC</h1>
            <p >Présentation du centre avec un appel à l'action.</p>
        </div>
    </div>

    <section id="presentation" class="container container-fluid d-flex flex-column justify-content-around mb-4 mt-4">
        <div class="d-flex flex-column justify-content-center" id="qui_sommes_nous" style="margin-bottom: 2rem">
            <h2>Qui sommes-nous ?</h2>
            <h5 class="text-justify">
                Le Centre d’Appui au Développement des Compétences est un programme de
                l’Organisation Non Gouvernementale (ONG) Internationale Association of Educators
                for World Peace (IAEWP). Le centre œuvre dans le domaine du développement de
                la personnalité, du leadership, de la planification de carrière, de l’accompagnement
                dans la mise en œuvre de plan de carrière et de l’insertion professionnelle ou la
                reconversion de carrière.
            </h5>
        </div>
        <div class="d-flex flex-column justify-content-center" id="" style="margin-bottom: 2rem">
            <h2>Pourquoi un Centre d’Appui au Développement des Compétences ?</h2>
            <h5 class="text-justify">
                Le Togo tout comme bon nombre de pays africains est confronté à des problèmes
                sociaux relatifs au développement des jeunes, au chômage, à leur employabilité et
                au développement de ses communautés. La problématique de l’emploi des jeunes
                reste un véritable défi pour toutes les économies, tous les continents et tous les
                pays. La contribution de nos universités, instituts et centres de formation en matière
                d’accompagnement à l’employabilité des jeunes n’est guère reluisante. Elle est
                caractérisée par les problèmes suivants : beaucoup de diplômés sortent des
                universités, instituts et centres de formation sans avoir des compétences
                suffisamment adaptées au marché du travail. La conséquence est que beaucoup
                sont sans emploi; peu d’étudiants sont créateurs d’emplois. Dans le domaine du
                développement de la personnalité des apprenants, il n’y a pratiquement pas de
                dispositif ou de formation permettant aux jeunes de faire face aux défis de la vie.
                Rares sont les centres de formations ou universités qui commencent par s’y
                intéresser.
            </h5>
        </div>
        <div class="flex">
            <h2>Présentation du CEADEC</h2>
            <p>Le Centre d’Appui au Développement des Compétences (CEADEC) est une nouvelle initiative fondée pour
                répondre aux besoins croissants de développement des compétences dans le monde professionnel.</p>
        </div>

        <div class="d-flex flex-column justify-content-center" id="" style="margin-bottom: 2rem">
            <div>
                <h2>Notre Vision</h2>
                <p>
                    Notre vision est de faire du Togo un pays où les jeunes identifient leurs potentialités, planifient
                    leur vie
                    tant sur le plan personnel que professionnel, et développent les compétences nécessaires pour
                    intégrer la
                    vie professionnelle plus facilement.
                </p>
            </div>
            <div>
                <h2>Notre Mission</h2>
                <p>
                    La mission du CEADEC est de faciliter le développement des compétences comportementales et
                    techniques des
                    jeunes afin d’accroître leur employabilité et leur insertion professionnelle.
                </p>
            </div>
            <div>
                <h2>Objectifs du CEADEC</h2>
                <ul>
                    <li>Contribuer au développement personnel des jeunes</li>
                    <li>Faciliter la planification de carrière</li>
                    <li>Faciliter la professionnalisation et l’insertion professionnelle des jeunes</li>
                    <li>Accompagner les jeunes dans la mise en œuvre de leur plan de carrière</li>
                </ul>
            </div>
        </div>

    </section>


    {{--    <section id="actualites" class="container container-fluid">--}}
    {{--        <h2>Actualités et Événements</h2>--}}
    {{--        <section>--}}
    {{--            <h3>Actualités</h3>--}}
    {{--            <!-- Articles récents -->--}}
    {{--        </section>--}}
    {{--        <section>--}}
    {{--            <h3>Événements à venir</h3>--}}
    {{--            <!-- Calendrier et détails des événements -->--}}
    {{--        </section>--}}
    {{--    </section>--}}



    <section id="services" class="container container-fluid d-flex flex-column justify-content-around mb-4 mt-4">
        <h2>Services</h2>
        <p>Le Centre d’Appui au Développement des Compétences (CEADEC) propose une gamme
            de services conçus pour soutenir les individus et les entreprises dans leur développement
            et leur croissance. Nos services sont adaptés aux besoins spécifiques de chaque client,
            garantissant des solutions personnalisées et efficaces.</p>
        <div class="row mt-20 d-flex justify-content-evenly">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="goal-card shape-bg-1 sal-animate" data-sal-delay="200" data-sal="slide-up"
                     data-sal-duration="800">
                    <div class="inner">
                        <div class="content">
                            <h6 class="title"><a class="default-cursor"> Accompagnement pour la connaissance de soi et
                                    la réalisation de son autodiagnostic</a></h6>
                            <p class="description">La connaissance de soi permet d'identifier vos forces, faiblesses,
                                opportunités et menaces, facilitant ainsi la prise de décision, l'ouverture d'esprit et
                                la libération des pressions environnementales.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="goal-card shape-bg-2 sal-animate" data-sal-delay="200" data-sal="slide-up"
                     data-sal-duration="800">
                    <div class="inner">
                        <div class="content">
                            <h6 class="title"><a class="default-cursor"> Accompagnement pour son développement
                                    personnel</a></h6>
                            <p class="description">Le centre vous aide à identifier les piliers de votre développement
                                personnel, à élaborer un plan basé sur votre autodiagnostic, et peut offrir un
                                accompagnement spirituel si souhaité.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="goal-card shape-bg-3 sal-animate" data-sal-delay="200" data-sal="slide-up"
                     data-sal-duration="800">
                    <div class="inner">
                        <div class="content">
                            <h6 class="title"><a class="default-cursor">Accompagnement pour l’élaboration de son plan de
                                    carrière</a></h6>
                            <p class="description">Chaque participant est accompagné pour élaborer un plan de
                                développement professionnel, visant à développer les compétences nécessaires pour être
                                opérationnel dans son futur métier ou sa reconversion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <a href="{{url('/service')}}" class="btn boutton-vers-page">Lire plus</a>
        </div>
        <div class="my-3 p-2 rounded pourquoi_nous_choisir" style="background-color: rgba(62,135,204,0.68)">
            <h3 style="color: #00519d">Pourquoi choisir nos services ?</h3>
            <div class="d-flex align-items-center justify-content-center">
                <div class="pourquoi_nous_choisir_text_part">
                    <h6 style="font-weight: 700">- Expertise et expérience</h6>
                    <h6 style="font-weight: 700">- Approche personnalisée</h6>
                    <h6 style="font-weight: 700">- Réseau et ressources</h6>
                </div>
                <img src="{{ asset('images/idea.webp') }}" alt="#" class="w-25 d-none d-md-block">
            </div>
        </div>

    </section>

    <section id="formations" class="container container-fluid d-flex flex-column justify-content-around">
        {{--        <h2>Formations</h2>--}}
        <h2>Formations professionnelles de courte durée</h2>
        <p class="text-justify">
            Les formations de courte durée ont généralement une durée comprise entre 1 et 3
            mois pour permettre à l’apprenant de pouvoir maitriser un domaine spécifique des
            formations dispensées par le CADEC. Au terme de ces formations l’apprenant reçoit
            un certificat attestant de ses compétences dans le champ de formation suivi.
            Le CADEC assure la formation pratique et professionnalisante des étudiants, des
            jeunes, des micro-entrepreneurs, des fonctionnaires des administrations publiques,
            privées et parapubliques, des cadres des collectivités locales et organisations de la
            société civile dans les divers domaines de développement. Ces formations diffèrent
            par leur contenu et leur durée ; elles sont surtout dispensées en résidentielles, en
            ligne,et peuvent être délocalisées ou à la carte.
        </p>
        <div>
            <a href="{{url('/formation')}}" class="btn boutton-vers-page">Liste des formations disponibles</a>
            {{--            <a href="{{url('/formation#modalite_inscription')}}" class="btn boutton-vers-page">Modalités d'inscription</a>--}}
        </div>
    </section>

    <section id="publications" class="container container-fluid d-flex flex-column justify-content-around">
        <h2>Recherche - Action</h2>
        <p>Le CEADEC met à disposition une série de publications qui visent à partager les connaissances,
            les recherches et les meilleures pratiques dans divers domaines. Ces documents sont conçus pour
            informer, éduquer et inspirer les professionnels, les chercheurs, les étudiants, et le grand public.</p>
        <div class="row mt-20 d-flex justify-content-evenly">
            <div class="col-lg-4 col-md-6 col-12 publication-home-col">
                <h3>Articles</h3>
                Nos articles abordent une variété de sujets d'actualité, tels que l'innovation,
                le développement des compétences, et les tendances du marchéRédigés par des experts
                et des professionnels du secteur, ces articles
                offrent des analyses approfondies et des perspectives nouvelles sur les défis contemporains.
            </div>
            <div class="col-lg-4 col-md-6 col-12 publication-home-col">
                <h3>Études de cas</h3>
                Nous publions régulièrement des études de cas basées sur des projets réels,
                illustrant comment les théories et les concepts sont appliqués dans des contextes pratiques.
                Ces études fournissent des exemples concrets de résolution de problèmes
                et de prise de décision dans différents secteurs d’activité.
            </div>
            <div class="col-lg-4 col-md-6 col-12 publication-home-col">
                <h3>Rapports</h3>
                Nos rapports institutionnels comprennent des résultats de recherche, des analyses de marché,
                et des recommandations stratégiques. Ils sont destinés à guider les décideurs,
                les entrepreneurs et les organisations dans leurs démarches de développement et d'innovation.
            </div>
        </div>
        <a href="{{url('/publication')}}" class="btn boutton-vers-page">Voir toutes nos publications</a>
    </section>

    {{--    <section class="container container-fluid">--}}
    {{--        <h2>Actualités Récentes</h2>--}}

    {{--    </section>--}}
    {{--    <section class="container container-fluid d-flex flex-column justify-content-around" id="temoignages">--}}
    {{--        <h2>Témoignages</h2>--}}
    {{--        <div class="row h-100 align-items-center justify-content-around">--}}
    {{--            <div class="card col-md-3 h-75 justify-content-center border border-4 border-dark">--}}
    {{--                <div class="user w-75">--}}
    {{--                    <div class="user_img"></div>--}}
    {{--                    <p class="user_name"></p>--}}
    {{--                </div>--}}
    {{--                <div class="user_message"></div>--}}
    {{--            </div>--}}
    {{--            <div class="card col-md-3 h-75 justify-content-center border border-4 border-dark">--}}
    {{--                <div class="user w-75">--}}
    {{--                    <div class="user_img"></div>--}}
    {{--                    <p class="user_name"></p>--}}
    {{--                </div>--}}
    {{--                <div class="user_message"></div>--}}
    {{--            </div>--}}
    {{--            <div class="card col-md-3 h-75 justify-content-center border border-4 border-dark">--}}
    {{--                <div class="user w-75">--}}
    {{--                    <div class="user_img"></div>--}}
    {{--                    <p class="user_name"></p>--}}
    {{--                </div>--}}
    {{--                <div class="user_message"></div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}
</main>

@include('partials.footer')


<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script src="{{asset('js/script.js')}}"></script>

<script>
    window.onload = function() {
        document.getElementById('loader').style.display = 'none';
    };

    window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 50)
    });
</script>


</body>
</html>
