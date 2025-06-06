<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Vistas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/home">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/listado">Películas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('agregar') }}">Agregar Película</a>
        </li>
      </ul>

      <ul class="navbar-nav">
        @auth
          <li class="nav-item">
            <span class="nav-link">Hola, {{ Auth::user()->name }}</span>
          </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-outline-danger btn-sm">Cerrar sesión</button>
            </form>
          </li>
        @endauth

        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
