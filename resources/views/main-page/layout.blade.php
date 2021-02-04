<!DOCTYPE html>
<html lang="en">
<head>
    @include('main-page/shared/head')

</head>
<body>
    @include('main-page/shared/header')

    @yield('content')

    @include('main-page/shared/footer')
    @include('main-page/shared/scripts')
</body>
</html>
