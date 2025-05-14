@extends('plantilla')
@section('title', 'Iniciar Sesión')
@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <div class="card shadow-lg rounded-3">
            <div class="card-body p-4">
                <h3 class="text-center mb-4">Iniciar Sesión</h3>

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" name="email" class="form-control" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Ingresar</button>

                    <div class="text-center mt-3">
                        <a href="{{ route('register') }}">¿No tienes cuenta? Regístrate</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
