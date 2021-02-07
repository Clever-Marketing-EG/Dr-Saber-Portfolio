<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard/shared/head-dash')

</head>
<body>
    @include('dashboard/shared/navbardashboard')

    @yield('content')
    @include('dashboard/shared/scriptdashboard')
    @include('main-page/shared/scripts')
    @include('dashboard/shared/footer-dashboard')

</body>
</html>
