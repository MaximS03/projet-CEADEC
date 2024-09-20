<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>A propos - CEADEC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/CEADEC_icon.ico') }}" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
@include('partials.header')

<main>

    <section id="contacts" class="container container-fluid d-flex flex-column justify-content-around h-auto ">
        <div class="home-contact">
            <h2>Contacts</h2>
        </div>
        <section class="contact-coordonee">
            <h3>Coordonnées</h3>
            <div class="d-flex h-100 w-100" style="padding: 1rem; justify-content: space-evenly">
                <div class="card contact-card">
                    <div class="first-content">
                        <span>Adresse</span>
                    </div>
                    <div class="second-content">
                        <span>Avedzi, Lomé</span>
                    </div>
                </div>
                <div class="card contact-card">
                    <div class="first-content">
                        <span>téléphone</span>
                    </div>
                    <div class="second-content">
                        <span style="font-size: 20px">(+228) 00000000 /</span>
                        <span style="font-size: 20px">00005000</span>
                    </div>
                </div>
                <div class="card contact-card">
                    <div class="first-content">
                        <span>email</span>
                    </div>
                    <div class="second-content">
                        <span>mamx1404@gmail.com</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="d-flex" style="justify-content: space-evenly">
            <div class="localisation">
                <h3>Localisation</h3>
                <div class="contact-map-area section-gap">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="google-map alignwide">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d13531.372054011026!2d1.16410615!3d6.20448445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTInMjYuOSJOIDHCsDA5JzU2LjYiRQ!5e1!3m2!1sfr!2stg!4v1726834587038!5m2!1sfr!2stg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        </section>
    </section>

</main>

@include('partials.footer')

{{--<script src="{{asset('js/script.js')}}"></script>--}}
</body>
</html>
