<header class="main-header clearfix">
    <nav class="main-menu clearfix">
        <div class="main-menu__wrapper clearfix">
            <div class="container">
                <div
                    class="main-menu__wrapper-inner clearfix-mobile d-md-flex justify-content-between align-items-center">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href=""><img src="{{ asset('assets/images/resources/logo-1.png') }}"
                                    alt=""></a>
                        </div>
                        <div class="main-menu__main-menu-box d-flex align-items-stretch">
                            <div class="main-menu__main-menu-box-inner">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li>
                                        <a href="">Home </a>
                                    </li>
                                    <li>
                                        <a href="">Informasi </a>
                                    </li>
                                    <li>
                                        <a href="">Pengajuan </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu__main-menu-box-search-get-quote-btn">
                                <div class="bg-dark h-100"
                                    style="padding: 12px; border-radius: 0 10px 10px 0; width:120px">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="main-menu__right">
                        <div class="main-menu__call">
                            <a href="">
                                <div class="main-menu__call-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </a>
                            <div class="main-menu__call-content">
                                <p>+92 (003) 68-090</p>
                            </div>
                        </div>
                    </div> --}}

                    <div class="main-menu__right">
                        <div class="main-menu__call dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="main-menu__call-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Profil</a></li>
                                <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Keluar</a></li>
                            </ul>
                            <div class="main-menu__call-content">
                                <p>+92 (003) 68-090</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
