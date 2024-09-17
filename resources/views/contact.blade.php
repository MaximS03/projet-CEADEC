<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>A propos - CADEC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/CADEC_icon.ico') }}" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
@include('partials.header')

<main>

    <section id="contacts" class="container container-fluid d-flex flex-column justify-content-around h-auto m-0">
        <h2>Contacts</h2>
        <section>
            <h3>Coordonnées</h3>
            <p>Adresse, téléphone, email.</p>
        </section>
        <section>
            <h3>Localisation</h3>
            <div class="contact-map-area section-gap">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="google-map alignwide">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d6765.648675151253!2d1.1675395!3d6.2073934!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTInMjYuOSJOIDHCsDA5JzU2LjYiRQ!5e1!3m2!1sfr!2stg!4v1725999666397!5m2!1sfr!2stg" width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </section>

</main>

@include('partials.footer')

{{--<script src="{{asset('js/script.js')}}"></script>--}}
</body>
</html>
