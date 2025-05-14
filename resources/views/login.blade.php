@extends('plantilla')
@section('contenido')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4 text-center">Iniciar Sesión</h2>

        <form action="{{ route('insercion_usuario') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" name="email" class="form-control" value="" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Ingresar</button>
        </form>
    </div>
</div>
@endsection
