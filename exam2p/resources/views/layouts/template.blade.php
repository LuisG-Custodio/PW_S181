<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    @vite(['resources/js/app.js'])

    <title>Videojuegos</title>
</head>
<body>
    @if(session()->has('Confirmation'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "Game {{session('Confirmation')}} saved successfully" ,
                icon: "success"
            });
        
        </script>
    @endif
    <div class="container">
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>