<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <title>@yield('title')</title>
    

</head>
<body class="d-flex flex-column min-vh-100">
    @include('partials.navbar')
    @yield('content')
    
</body>
<footer class="mt-auto">
    @include('partials.footer')
</footer>
</html>