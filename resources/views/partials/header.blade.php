<header class="w-100">
{{--    <nav class="navbar">--}}
{{--        <h1>CADEC</h1>--}}
{{--        <ul>--}}
{{--            <li><a href="{{url('/')}}">Accueil</a></li>--}}
{{--            <li><a href="{{ url('#presentation') }}">Présentation du CADEC</a></li>--}}
{{--            <li><a href="#actualites">Actualités et événements</a></li>--}}
{{--            <li><a href="{{url('/about')}}">À propos</a></li>--}}
{{--            <li><a href="{{url('/formations')}}">Formations</a></li>--}}
{{--            <li><a href="{{url('/services')}}">Services</a></li>--}}
{{--            <li><a href="{{url('/publications')}}">Publications</a></li>--}}
{{--            <li><a href="{{url('/contact')}}">Contacts</a></li>--}}
{{--        </ul>--}}
{{--    </nav>--}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">CADEC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/')}}">Accueil</a>
                </li>
                <li class="nav-item {{ request()->is('presentation') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/presentation') }}">Présentation du CADEC</a>
                </li>
                <li class="nav-item {{ request()->is('services') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/services')}}">Services offerts</a>
                </li>
                <li class="nav-item {{ request()->is('formations') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/formations')}}">Formations</a>
                </li>
                <li class="nav-item {{ request()->is('realisations') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/realisations')}}">Réalisations</a>
                </li>
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

</header>
