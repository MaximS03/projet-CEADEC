<header class="w-100">
    <nav class="navbar navbar-expand-lg navbar-light p-2">
        <a class="navbar-brand d-flex align-items-center justify-content-around" href="{{ url('/') }}" style="min-width: 200px">
            <img src="{{ asset('images/CEADEC.webp') }}" alt="Logo CEADEC" height="60" class="me-2"> <!-- Image du logo -->
            <div>
                <span>CEADEC</span>
                <p style="font-size: 12px; max-width: 200px; height: 30px; margin: 0; color: #ffffff;">Centre d'Appui au <br>Développement des Compétences</p>
            </div>
        </a>

        <img src="{{ asset('images/AIEPM.webp') }}" alt="Logo AIEPM" height="40">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: 0">
            <i class="bi bi-list menu-icon" style="font-size: 30px; color: #000;"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                </li>
                <li class="nav-item {{ request()->is('service') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/service') }}">Services offerts</a>
                </li>
                <li class="nav-item {{ request()->is('formation') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/formation') }}">Formations</a>
                </li>
                <li class="nav-item {{ request()->is('realisation') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/realisation') }}">Réalisations</a>
                </li>
                <li class="nav-item {{ request()->is('publication') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/publication') }}">Recherche - Action</a>
                </li>
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
