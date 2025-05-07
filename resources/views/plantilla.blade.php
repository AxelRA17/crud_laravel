<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>{{$titulo}}</title>
</head>

<body>

  <!--   <header class="text-center py-4">
        <h1 class="minecraft-title">Peliculas</h1>
    </header>
 -->
    <section class="v-100">
        @include('components/navbar')
        <div class="container mt-4">
            @yield('contenido')
        </div>
        @include('components/footer')
    </section>


    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
