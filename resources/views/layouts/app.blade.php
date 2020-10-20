<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Laravel</title>

</head>
<body class="antialiased">
<div class="container">
    @yield('content')
    <h3>From yield 1</h3>
</div>
 @yield('footer')

</body>
</html>