<header class="main-header clearfix">
    <nav class="main-menu mb-3 mb-md-0">
        <div class="main-menu__wrapper clearfix">
            <div class="container">
                <div class="main-menu__wrapper-inner justify-content-between">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="index.html"><img src="{{ asset('assets/images/resources/logo-1.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="main-menu__main-menu-box justify-content-between">
                            <div class="main-menu__main-menu-box-inner">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li>
                                        <a href="{{ route('home') }}">Home </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('information') }}">Informasi </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pengajuan') }}">Pengajuan </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__main-menu-box-search-get-quote-btn">
                                <div class="main-menu__main-menu-box-get-quote-btn-box">
                                    <div class="main-menu__main-menu-box-get-quote-btn"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu__right">
                        <div class="main-menu__call">
                            <div class="dropdown">
                                <div class="main-menu__call-icon" data-bs-toggle="dropdown" aria-expanded="false"
                                    role="button" tabindex="0">
                                    <i class="fas fa-user"></i>
                                </div>
                                <ul class="dropdown-menu mt-3">
                                    <li><a class="dropdown-item" href="#">Profil</a></li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </div>
                            <div class="main-menu__call-content">
                                <p>Kharisma Safio Ananda</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
