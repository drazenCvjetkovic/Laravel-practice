<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Laravel</title>

</head>
<body class="antialiased">
<div class="container">
    @yield('header')
    <h2>Header</h2>

    @yield('content')
    <div style="background-color:darkred">

    </div>
</div>
@yield('footer')

</body>
</html>