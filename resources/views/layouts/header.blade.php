<header id="header" class="header d-flex align-items-center" style="position: absolute; width: 100%">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
            <img src="{{ asset('img/logo.png') }}" alt="" />
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                @php
                    $isHome = Request::is('/');
                @endphp

                <li><a href="{{ $isHome ? '#hero' : url('/#hero') }}" class="active">Home</a></li>
                <li><a href="{{ $isHome ? '#sobre' : url('/#sobre') }}">Sobre</a></li>
                <li><a href="{{ $isHome ? '#composicao' : url('/#composicao') }}">Composição</a></li>
                <li><a href="{{ $isHome ? '#camaras-tecnicas' : url('/#camaras-tecnicas') }}">Câmaras Técnicas</a></li>
                <li><a href="{{ $isHome ? '#projetos' : url('/#projetos') }}">Projetos</a></li>
                <li><a href="{{ $isHome ? '#noticias' : url('/#noticias') }}">Notícias</a></li>
                <li><a href="{{ $isHome ? '#parceiros' : url('/#parceiros') }}">Parceiros</a></li>
                <li><a href="{{ $isHome ? '#contato' : url('/#contato') }}">Contato</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
