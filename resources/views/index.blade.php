<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Bienvenue - CADEC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
@include('partials.header')

<main>
    <section id="home" class="container-fluid">
        <div >
            <h1>Bienvenue au CADEC</h1>
            <p>Présentation du centre avec un appel à l'action.</p>
        </div>
    </section>

    <section id="presentation" class="container container-fluid d-flex flex-column justify-content-around">
        <div class="flex">
            <h2>Présentation du CADEC</h2>
            <h5>Le Centre d’Appui au Développement des Compétences (CADEC) est une nouvelle initiative fondée pour répondre aux besoins croissants de développement des compétences dans le monde professionnel.</h5>
        </div>
        <div>
            <h3>Vision</h3>
            <p>Faire des jeunes des cadres compétents directement opérationnels pour les<br>
                entreprises, dans l’offre de services à la communauté et capables de s’autoemployer dès la fin de formation.</p>

            <h3>Mission</h3>
            <ul>
                <li><p>Contribuer au développement personnel et professionnel des jeunes ;</p></li>
                <li><p>Assurer une formation technique et professionnelle diplômante, continue et initiale ;</p></li>
                <li><p>Contribuer à l'insertion professionnelle et sociale des jeunes, comme à celle ...</p></li>
            </ul>

            <a href="{{url('/about')}}" class="btn btn-primary">Lire plus</a>
{{--            <h3>Objectifs</h3>--}}
{{--            <!-- Objectifs à court et long terme -->--}}
        </div>
{{--        <div>--}}
{{--            <h3>Historique</h3>--}}
{{--            <!-- Chronologie des événements marquants -->--}}
{{--        </div>--}}

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

    <section id="formations" class="container container-fluid d-flex flex-column justify-content-around">
        <h2>Formations</h2>
        <div class="row">
            <div class="col-sm-4">
                <h3>Formations de courte durée</h3>
                <p>Les formations de courte durée et les séminaires sont organisées en unités de
                    formation et peuvent être « délocalisées» c’est-à-dire réalisées sur le site du
                    demandeur et dans ce cas, leurs durées et leurs contenus sont définis en fonction
                    des besoins exprimés.</p>
            </div>
            <div class="col-sm-4">
                <h3>Formations diplômantes</h3>
                <p>Les formations diplômantes passent par le développement de la personnalité de
                    l’apprenant, la planification du développement de sa carrière.</p>
            </div>
            <div class="col-sm-4">
                <h3>Séminaires</h3>
                <p>Une série de séminaires destinés à approfondir des sujets spécifiques et à fournir
                    aux participants des compétences pratiques et directement applicables dans leur domaine professionnel vous est proposée.
                    Nos séminaires couvrent une variété de thèmes, incluant le leadership, l'innovation,
                    la gestion de projets, et les technologies émergentes.</p>
            </div>
        </div>
        <div >
            <a href="#" class="btn btn-primary btn-lg">Lire plus</a>
            <a href="#" class="btn btn-outline-primary btn-lg">Modalités d'inscription</a>
        </div>
    </section>

    <section id="services" class="container container-fluid d-flex flex-column justify-content-around">
        <h2>Services</h2>
        <h5>Le Centre d’Appui au Développement des Compétences (CADEC) propose une gamme
            de services conçus pour soutenir les individus et les entreprises dans leur développement
            et leur croissance. Nos services sont adaptés aux besoins spécifiques de chaque client,
            garantissant des solutions personnalisées et efficaces.</h5>
        <div class="row">
            <div class="col-sm-4">
                <h3>Appui-Conseil &/Accompagnement</h3>
                <p>Nous proposons des services d’appui-conseil aux entreprises et aux institutions souhaitant améliorer
                    leurs performances ou relever de nouveaux défis. Nous accompagnons
                    nos clients, en leur fournissant des conseils sur mesure et des solutions pratiques.</p>
            </div>
            <div class="col-sm-4">
                <h3>Incubation d'entreprises</h3>
                Le CADEC offre un programme d'incubation dédié aux jeunes entrepreneurs et startups. Ce programme
                fournit un soutien complet allant de la phase d'idée à la réalisation du projet. {{-- Les services incluent--}}
{{--                un mentorat personnalisé, l'accès à des ressources techniques, des conseils en gestion d'entreprise,--}}
{{--                et des opportunités de financement.--}}
                Notre objectif est de favoriser la création et la croissance de nouvelles entreprises innovantes dans la région.
            </div>
            <div class="col-sm-4">
                <h3>Recherche-Action & Innovation </h3>
                Le CADEC s'engage à promouvoir l'innovation à travers la recherche-action. Nous collaborons avec
                des entreprises, des institutions académiques, et des organisations pour mener des projets de recherche appliquée
                qui répondent aux besoins du marché. {{--Ces initiatives visent à développer de nouvelles idées,--}}
{{--                technologies, et pratiques qui peuvent être mises en œuvre directement au sein des entreprises et des communautés.--}}
            </div>
        </div>
        <div >
            <a href="#" class="btn btn-primary btn-lg">Lire plus</a>
        </div>

        <div class="my-3 p-2 rounded  w-50" style="background-color: rgba(62,135,204,0.68)">
            <h3 style="color: #00519d">Pourquoi choisir nos services ?</h3>
            <div class="d-flex align-items-center justify-content-center">
                <div class="w-50">
                    <h6 style="font-weight: 700">- Expertise et expérience</h6>
                    <h6 style="font-weight: 700">- Approche personnalisée</h6>
                    <h6 style="font-weight: 700">- Réseau et ressources</h6>
                </div>
                <img src="{{ asset('images/idea.webp') }}" alt="#" class="w-25 d-none d-md-block">
            </div>
        </div>

    </section>

    <section id="publications" class="container container-fluid d-flex flex-column justify-content-around">
        <h2>Publications</h2>
        <p>Le CADEC met à disposition une série de publications qui visent à partager les connaissances,
            les recherches et les meilleures pratiques dans divers domaines. Ces documents sont conçus pour
            informer, éduquer et inspirer les professionnels, les chercheurs, les étudiants, et le grand public.</p>
       <div class="row">
           <div class="col-sm-4">
               <h3>Articles</h3>
               Nos articles abordent une variété de sujets d'actualité, tels que l'innovation,
               le développement des compétences, et les tendances du marchéRédigés par des experts
               et des professionnels du secteur, ces articles
               offrent des analyses approfondies et des perspectives nouvelles sur les défis contemporains.
           </div>
           <div class="col-sm-4">
               <h3>Études de cas</h3>
               Nous publions régulièrement des études de cas basées sur des projets réels,
               illustrant comment les théories et les concepts sont appliqués dans des contextes pratiques.
               Ces études fournissent des exemples concrets de résolution de problèmes
               et de prise de décision dans différents secteurs d’activité.
           </div>
           <div class="col-sm-4">
               <h3>Rapports</h3>
               Nos rapports institutionnels comprennent des résultats de recherche, des analyses de marché,
               et des recommandations stratégiques. Ils sont destinés à guider les décideurs,
               les entrepreneurs et les organisations dans leurs démarches de développement et d'innovation.
           </div>
       </div>
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

    <section id="contacts" class="container container-fluid d-flex flex-column justify-content-around">
        <h2>Contacts</h2>
        <section>
            <h3>Coordonnées</h3>
            <p>Adresse, téléphone, email.</p>
        </section>
        <section>
            <h3>Formulaire de contact</h3>
            <form action="submit_form.php" method="post">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </section>
        <section>
            <h3>Localisation</h3>
            <!-- Carte interactive avec l’emplacement du CADEC -->
        </section>
    </section>
</main>

@include('partials.footer')
</body>
</html>
