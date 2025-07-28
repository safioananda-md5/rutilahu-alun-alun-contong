<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    @include('layouts.head_admin')
</head>

<body></body>

</html>

@include('layouts.sidebar')

<main class="dashboard-main">
    @include('layouts.navbar_admin')

    <div class="dashboard-main-body">

        @include('layouts.breadcrumb')

        @yield('content')

    </div>

    @include('layouts.admin_footer')
</main>

@include('layouts.script_admin')

</body>

</html>
