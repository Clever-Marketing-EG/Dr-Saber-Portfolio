<!DOCTYPE html>
<html lang="en">
<head>
    @include('main-page.Shared.head')
</head>
<body>
    @include('main-page.Shared.header')

    @yield('content')

    @include('main-page.Shared.footer')
    @include('main-page.Shared.scripts')
</body>
</html>
