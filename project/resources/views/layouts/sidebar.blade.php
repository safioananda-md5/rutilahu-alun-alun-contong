<aside class="sidebar">
    <button type="button" class="sidebar-close-btn">
        <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
    </button>
    <div>
        <a href="index.html" class="sidebar-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="site logo" class="light-logo">
            <img src="{{ asset('assets/images/logo-light.png') }}" alt="site logo" class="dark-logo">
            <img src="{{ asset('assets/images/logo-icon.png') }}" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="sidebar-menu-area">
        <ul class="sidebar-menu" id="sidebar-menu">
            @if (Auth::user()->role === 'admin99')
                <li>
                    <a href="{{ route('admin.dashboard_admin') }}">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Dashboard</span>
                    </a>
                </li>
            @elseif (Auth::user()->role === 'rtrw')
                @if ($posisitonStatus === 'RT')
                    <li>
                        <a href="{{ route('RT.dashboard_rt') }}">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                            <span>Dashboard</span>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('RW.dashboard_rw') }}">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                            <span>Dashboard</span>
                        </a>
                    </li>
                @endif
            @endif
            <li>
                <a href="{{ route('home') }}">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Halaman User</span>
                </a>
            </li>
            @if (Auth::user()->role === 'admin99')
                @livewire('user-account-badge')
                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <i class="ri-news-line text-xl me-14 d-flex w-auto"></i>
                        <span>Informasi</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('admin.information.create_information') }}"><i
                                    class="ri-circle-fill circle-icon text-success-main w-auto"></i>
                                Tambah Informasi</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.information.list_information') }}"><i
                                    class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                                Daftar Informasi</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <iconify-icon icon="solar:calculator-outline" class="menu-icon"></iconify-icon>
                        <span>Uji Rekomendasi Peneriman Bantuan</span>
                    </a>
                </li>
            @endif
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="javascript:void(0)" onclick="event.preventDefault(); this.closest('form').submit();">
                        <iconify-icon icon="solar:logout-outline" class="menu-icon"></iconify-icon>
                        <span>Logout</span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</aside>
