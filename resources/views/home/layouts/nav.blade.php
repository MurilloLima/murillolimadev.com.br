<!--<< Header v-1 >>-->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="main__logo">
                <a href="/" class="logo">
                    <img src="{{ asset('home/img/logo/logo.png') }}" alt="logo">
                </a>
            </div>
            <ul class="main-menu">
                <li>
                    <a href="{{ route('home.pages.index') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('home.pages.index') }}#about">
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="{{ route('home.pages.index') }}#prot">
                        Trabalhos
                    </a>
                </li>

                <li>
                    <a href="{{ route('home.pages.fale') }}">
                        Fale comigo
                    </a>

                </li>
                <li>
                    <a href="{{ route('home.pages.contatos') }}">
                        Contatos
                    </a>
                </li>
            </ul>
            <div class="menu__components d-flex align-items-center">
                <a href="https://wa.me/5599991106799" class="d-flex fw-500 cmn--btn align-items-center gap-2">
                    <span class="get__text">
                        Whatsapp
                    </span>
                    <span>
                        <i class="bi bi-arrow-right fz-20"></i>
                    </span>
                </a>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                {{-- <div class="remove__click">
                    <i class="bi bi-list"></i>
                </div> --}}
            </div>
        </div>
    </div>
</header>
<!--<< Header v-1 >>-->
