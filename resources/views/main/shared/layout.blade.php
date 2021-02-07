<!DOCTYPE html>
<html lang="en">
<head>
    @include('main.shared.head')
</head>
<body>
    @include('main.shared.header')

    @yield('content')

    @include('main.shared.footer')
    @include('main.shared.scripts')
</body>
</html>
