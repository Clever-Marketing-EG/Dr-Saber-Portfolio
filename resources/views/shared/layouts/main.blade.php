<html lang="en">
<head>
    @include('shared.head')
</head>
<body>
@include('shared.nav')

<div class="main-container">
    <main>
        @yield('content')
    </main>
</div>

@include('shared.footer')
@include('shared.scripts')
</body>
</html>
