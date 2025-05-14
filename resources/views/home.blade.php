@extends('plantilla')
@section('contenido')
<div class="text-center">
    <h1 class="mb-3">¡Hola, {{ Auth::user()->name }}!</h1>
    <p class="lead">Bienvenido a tu panel de control</p>

    <div class="row justify-content-center mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Ver Películas</h5>
                    <a href="{{ route('listado') }}" class="btn btn-outline-primary w-100">Ir al listado</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body text-center">
                    <h5 class="card-title">Agregar Película</h5>
                    <a href="{{ route('agregar') }}" class="btn btn-outline-success w-100">Nueva película</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection