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
        <div class="services-home">

        </div>
    <section class="service">
        <div class="container">
            <h1>Nos Services</h1>
            <p>Le CEADEC offre une gamme de services visant à accompagner les jeunes et les professionnels dans leur développement personnel et professionnel. Nous proposons des formations, des conseils et des accompagnements sur mesure pour répondre aux besoins spécifiques de chaque individu et institution.</p>
        </div>
        <div class="container">
            <h2>Sensibilisation & Plaidoyer</h2>
            <p>L’un des objectifs du centre est la sensibilisation, la promotion des approches et
                stratégies visant à attirer l’attention des apprenants, des jeunes et toute frange de la
                population sur l’importance du développement de la personnalité; la planification de
                carrière ou sa reconversion, la nécessité de valoriser l’approche par compétences
                dans les curricula de formation puis l’accompagnement des apprenants sur le
                marché de travail.
                Le CADEC travaillera également à la planification et à la mise en œuvre des actions
                de plaidoyers en vue d’emmener les jeunes, les parents, les institutions de formation
                sur l’intérêt du développement des apprenants et de leurs tuteurs.</p>
        </div>

        <div class="container text-break">
            <h2>Études & Appui-Conseil/Accompagnement</h2>
            <div class="row mt-20 d-flex justify-content-evenly">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="goal-card shape-bg-1 sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="inner">
                            <div class="content">
                                <h6 class="title"><a class="default-cursor"> Accompagnement pour la connaissance de soi et la réalisation de son autodiagnostic</a></h6>
                                <p class="description">La connaissance de soi permet d'identifier vos forces, faiblesses, opportunités et menaces, facilitant ainsi la prise de décision, l'ouverture d'esprit et la libération des pressions environnementales.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="goal-card shape-bg-2 sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="inner">
                            <div class="content">
                                <h6 class="title"><a class="default-cursor"> Accompagnement pour son développement personnel</a></h6>
                                <p class="description">Le centre vous aide à identifier les piliers de votre développement personnel, à élaborer un plan basé sur votre autodiagnostic, et peut offrir un accompagnement spirituel si souhaité.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="goal-card shape-bg-3 sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="inner">
                            <div class="content">
                                <h6 class="title"><a class="default-cursor">Accompagnement pour l’élaboration de son plan de carrière</a></h6>
                                <p class="description">Chaque participant est accompagné pour élaborer un plan de développement professionnel, visant à développer les compétences nécessaires pour être opérationnel dans son futur métier ou sa reconversion.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="goal-card shape-bg-3 sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="inner">
                            <div class="content">
                                <h6 class="title"><a class="default-cursor">Accompagnement des jeunes vers le marché du travail pour des stages de professionnalisation et d’insertion professionnelle</a></h6>
                                <p class="description">Le dispositif vise à accroître le potentiel d’employabilité des jeunes, faciliter des renforcements de capacités à travers des modules complémentaires à leur formation initiale, promouvoir l’accès des jeunes aux stages dans les entreprises, ONG et administrations publiques, et suivre le développement des compétences chez les jeunes.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="goal-card shape-bg-3 sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="inner">
                            <div class="content">
                                <h6 class="title"><a class="default-cursor">Accompagnement pour la mise en œuvre de son plan de carrière</a></h6>
                                <p class="description">Le CADEC accompagne les jeunes dans la mise en œuvre de leur plan de carrière, en suivant le développement de leurs compétences comportementales et techniques. Des formations continues sont proposées, basées sur une approche par compétences, visant à répondre aux besoins opérationnels des participants. Le CADEC collabore avec des entreprises, des ONG, des associations et des collectivités pour s'assurer que les offres de formation correspondent aux besoins du marché du travail.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="goal-card shape-bg-3 sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="inner">
                            <div class="content">
                                <h6 class="title"><a class="default-cursor">Appui- Accompagnement aux institutions</a></h6>
                                <p class="description">Les activités d’appui/conseil du CADEC visent à assister techniquement les institutions pour promouvoir leur développement et améliorer leurs performances, tout en contribuant à identifier et élaborer des programmes de formation adaptés aux besoins réels. Ces prestations s'adressent à diverses institutions, notamment les confessions religieuses, les micro-entreprises, les ONG, les universités, et les collectivités locales. Les interventions se font sous forme de partenariats à long terme ou de consultations ponctuelles, incluant des formations, du coaching et du mentoring.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <h2>Formations Professionnelles de Courte Durée</h2>
            <p>Nos formations, d’une durée de 1 à 3 mois, sont conçues pour permettre aux participants de développer des compétences spécifiques adaptées aux besoins du marché du travail. Les formations sont disponibles en mode résidentiel, en ligne, ou à la carte.</p>
        </div>
        <section class="contact-cta">
            <div class="container mb-2">
                <h2>Besoin de plus d'informations ?</h2>
                <p>Contactez-nous pour en savoir plus sur nos services ou pour discuter de vos besoins spécifiques.</p>
                <a href="{{url('/contact')}}" class="btn btn-lg boutton-vers-page">Nous Contacter</a>
            </div>
        </section>
    </section>


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
