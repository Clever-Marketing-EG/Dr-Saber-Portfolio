<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.shared.head')
</head>

<body>
@include('dashboard.shared.nav')

@yield('content')
@include('dashboard.shared.scripts')
@include('main.shared.scripts')
@include('dashboard.shared.footer')

</body>
</html>
