<header class="w-100">
    <nav class="navbar navbar-expand-lg navbar-light p-2">
        <a class="navbar-brand" href="{{ url('/') }}">CADEC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link text-white" href="{{url('/')}}">Accueil</a>
                </li>
                <li class="nav-item {{ request()->is('presentation') ? 'active' : '' }}">
                    <a class="nav-link text-white" href="{{ url('/presentation') }}">Présentation du CADEC</a>
                </li>
                <li class="nav-item {{ request()->is('publication') ? 'active' : '' }}">
                    <a class="nav-link text-white" href="{{ url('/publication') }}">Publication</a>
                </li>
                <li class="nav-item {{ request()->is('service') ? 'active' : '' }}">
                    <a class="nav-link text-white" href="{{url('/service')}}">Services offerts</a>
                </li>
                <li class="nav-item {{ request()->is('formation') ? 'active' : '' }}">
                    <a class="nav-link text-white" href="{{url('/formation')}}">Formations</a>
                </li>
                <li class="nav-item {{ request()->is('realisation') ? 'active' : '' }}">
                    <a class="nav-link text-white" href="{{url('/realisation')}}">Réalisations</a>
                </li>
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                    <a class="nav-link text-white" href="{{url('/contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

</header>
