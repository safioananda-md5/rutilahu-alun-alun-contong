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
                                    @if (Auth::check())
                                        @if (!in_array(Auth::user()->role, ['admin99', 'rtrw']))
                                            <li>
                                                <a href="{{ route('pengajuan') }}">Pengajuan</a>
                                            </li>
                                        @endif
                                    @else
                                        <li>
                                            <a href="{{ route('pengajuan') }}">Pengajuan</a>
                                        </li>
                                    @endif
                                    @if (Auth::check())
                                        @if (Auth::user()->role === 'admin99')
                                            <li>
                                                <a href="{{ route('admin.dashboard_admin') }}">Halaman Admin</a>
                                            </li>
                                        @endif
                                    @endif
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
                        <div class="dropdown">
                            <div class="main-menu__call" data-bs-toggle="dropdown" aria-expanded="false" role="button"
                                tabindex="0">
                                <div class="main-menu__call-icon">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="main-menu__call-content">
                                    @if (Auth::check())
                                        <p>{{ Auth::user()->name }}</p>
                                    @else
                                        <p>Silahkan Login!</p>
                                    @endif
                                </div>
                            </div>
                            <ul class="dropdown-menu mt-3">
                                @if (Auth::check() && Auth::user()->role !== 'admin99')
                                    <li><a class="dropdown-item" href="#">Profil</a></li>
                                @endif
                                @if (Auth::check())
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item" type="submit">Log Out</button>
                                        </form>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
