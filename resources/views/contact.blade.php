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
    <div class="home-contact">    </div>
    <div id="contacts" class="container container-fluid d-flex flex-column justify-content-around h-auto ">
        <h2>Contacts</h2>
        <div class="contact-coordonee">
            <h3>Coordonnées</h3>
            <div class="d-flex flex-wrap flex-lg-row flex-column align-items-stretch w-100 cards" style="padding: 1rem; justify-content: space-evenly">
                <div class="card contact-card mb-3">
                    <div class="first-content">
                        <span>Adresse</span>
                    </div>
                    <div class="second-content text-center">
                        <span><a href="{{url('https://maps.app.goo.gl/ZLELsduBseKzgRPa6')}}" style="color: #000">650, 2ème Rue Après le Siège de EBOMAF, quartier Apédokoè, Commune de Sanguéra</a></span>
                    </div>
                </div>
                <div class="card contact-card mb-3">
                    <div class="first-content">
                        <span>Téléphone</span>
                    </div>
                    <div class="second-content">
                        <span><a href="{{url('tel:22890036914')}}" style="color: #000">(+228) 9003-6914</a></span>
                    </div>
                </div>
                <div class="card contact-card mb-3">
                    <div class="first-content">
                        <span>E-m@il</span>
                    </div>
                    <div class="second-content">
                        <span><a href="{{url('mailto:cadec@siegecadectogo.org')}}" style="color: #000">cadec@ceadec.org</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex localisation-formulaire" style="justify-content: space-evenly">
            <div class="localisation">
                <h3>Localisation</h3>
                <div class="contact-map-area section-gap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="google-map alignwide">
                                    <div class="map-responsive">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d845.6923300383498!2d1.136065014389349!3d6.215954995870157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTInNTcuMyJOIDHCsDA4JzEwLjAiRQ!5e1!3m2!1sfr!2stg!4v1727538568154!5m2!1sfr!2stg" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="formulaire-contact">
                <h3>Formulaire de contact</h3>
                <form action="/submit-form" method="post">
                    @csrf
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="name" required placeholder="Votre nom">

                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required placeholder="example@example.com">

                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="6" maxlength="500" placeholder="Écrivez votre message ici..." style="resize: none" required></textarea>

                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

</main>

@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="{{asset('js/script.js')}}"></script>

<script type="text/javascript">
    window.addEventListener("scroll", function () {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 50)
    });
</script>
</body>
</html>
