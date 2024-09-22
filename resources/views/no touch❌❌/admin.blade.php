<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - CEADEC</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin CEADEC</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('formations.index') }}">Formations</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('services.index') }}">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('publications.index') }}">Publications</a></li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger" type="submit">Déconnexion</button>
        </form>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
