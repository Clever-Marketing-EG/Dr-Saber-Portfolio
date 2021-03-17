@if(\Illuminate\Support\Facades\Session::get('locale') == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en">
@endif
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
