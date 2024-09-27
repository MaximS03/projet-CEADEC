<header class="w-100">
    <nav class="navbar navbar-expand-lg navbar-dark p-2">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('images/CEADEC.webp') }}" alt="Logo CEADEC" height="60" class="mr-2"> <!-- Image du logo -->
            <span style="">CEADEC</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleNavbar(this);">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/')}}">Accueil</a>
                </li>
{{--                <li class="nav-item {{ request()->is('presentation') ? 'active' : '' }}">--}}
{{--                    <a class="nav-link" href="{{ url('/presentation') }}">Présentation du CEADEC</a>--}}
{{--                </li>--}}
                <li class="nav-item {{ request()->is('service') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/service')}}">Services offerts</a>
                </li>
                <li class="nav-item {{ request()->is('formation') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/formation')}}">Formations</a>
                </li>
                <li class="nav-item {{ request()->is('realisation') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/realisation')}}">Réalisations</a>
                </li>
                <li class="nav-item {{ request()->is('publication') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/publication') }}">Recherche - Action</a>
                </li>
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                </li>
            </ul>
        </div>
        <img src="{{ asset('images/AIEPM.webp') }}" alt="International Association of Educators for World Peace" class="d-none d-lg-inline ml-3" height="60">
    </nav>
</header>
<section class="banner"></section>
