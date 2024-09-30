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
        <span class="sr-only"></span>
    </div>
</div>

<main>
    <div id="publication-home" class="container-fluid ">
        <div class="h-50 w-50 d-flex flex-column justify-content-around">
        </div>
    </div>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Recherche - Action</h1>
{{--        <h1 class="text-center mb-4"></h1>--}}
{{--        <p class="text-center">--}}
{{--            --}}
{{--        </p>--}}

        <p>
            Dans le domaine de la recherche - action, le CEADEC dispose d'une expertise pour conduire
            des études ex ante sur l'identification des freins au développement du potentiel des jeunes  dans les  communautés.
        </p>
        <div class="row mt-20 d-flex justify-content-evenly">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="goal-card shape-bg-1 sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="inner">
                        <div class="content">
                            <h6 class="title"><a class="default-cursor">&Eacute;tudes et recherches quantitatives et qualitatives sur:</a></h6>
                            <div>
                                <ul>
                                    <li>l’état des lieux de la situation des jeunes disposant ou non des plans de carrière dans les communes du pays en vue de l’élaboration des programmes communaux d’appui au développement des carrières de ces jeunes ;</li>
                                    <li>le suivi des effets des accompagnements des jeunes dans leurs communautés ;</li>
                                    <li>l’état des lieux sur les connaissances et compétences des parents et tuteurs en ce qui concerne la nécessité de la planification des carrières dans le développement et la performance scolaire, universitaire et professionnelle de leurs enfants ;</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="goal-card shape-bg-1 sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                    <div class="inner">
                        <div class="content">
                            <h6 class="title"><a class="default-cursor">Les thématiques de recherche portent entre autres sur :</a></h6>
                            <div>
                                <ul>
                                    <li>la planification des carrières et les inégalités scolaires et universitaires ;</li>
                                    <li>la planification des carrières des jeunes (scolarisés, non scolarisés, entrepreneurs etc…)  et le développement personnel ;</li>
                                    <li>le chômage et l’employabilité des jeunes diplômés et ceux en formation ;</li>
                                    <li>l’impact des plans de carrière préalables sur le développement communautaire ;</li>
                                    <li>la planification des carrières et le genre.</li>
                                    <li>Etc…</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
