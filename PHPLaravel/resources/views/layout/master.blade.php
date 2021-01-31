<!DOCTYPE html>
<html>
<header>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="IE=edge"/>
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/styde.css')}}"/>
</header>
<body>
    @include('layout.header')

<div class="context">
    <h1>Khoa phạm</h1>
    @yield('Noidung')
    @yield('Noidung2')
    @yield('ifelse')
</div>
    @include('layout.footer')
</body>
</html>
