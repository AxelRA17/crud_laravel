<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>{{$titulo}}</title>
</head>

<body class="d-flex flex-column min-vh-100">
    @include('components/navbar')

    <main class="flex-fill container mt-4">
        @yield('contenido')
    </main>

    @include('components/footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
