<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Rutilahu Alun-Alun Contong Kota Surabaya')</title>
    @include('layouts.head')
</head>

<body class="custom-cursor">
    @include('layouts.custom_cursor')
    @include('layouts.preloader')

    <div class="page-wrapper">
        @include('layouts.navbar')
        @include('layouts.sticky_navbar')

        @yield('content')

        @include('layouts.footer')
    </div>

    @include('layouts.mobile_nav')
    @include('layouts.scroll_to_top')
    @include('layouts.script')

    @yield('scripts')
</body>

</html>
