<!DOCTYPE html>
<html lang="en">
<head>
    @include('main.Shared.head')
</head>
<body>
    @include('main.Shared.header')

    @yield('content')

    @include('main.Shared.footer')
    @include('main.Shared.scripts')
</body>
</html>
