<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/js/app.js'])
    
    <title>@yield('titulo')</title>
</head>
<body>
    @component('partials.navbar')
    @endcomponent
    @yield('contenido')

</body>
</html>