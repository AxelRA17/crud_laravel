@extends('plantilla')
@section('contenido')
<div class="container py-4">
    <h2 class="text-center mb-4">🎬 Listado de Películas</h2>

    <div class="row">
        @forelse ($datos as $pelicula)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pelicula->titulo }}</h5>
                        <p class="card-text text-muted"><strong>Género:</strong> {{ $pelicula->genero }}</p>
                        <p class="card-text"><strong>Director:</strong> {{ $pelicula->director }}</p>
                        <p class="card-text"><strong>Fecha de estreno:</strong> {{ \Carbon\Carbon::parse($pelicula->fecha_estreno)->format('d/m/Y') }}</p>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($pelicula->descripcion, 100) }}</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 d-flex justify-content-between px-3 pb-3">
                        <a href="{{ route('editar', $pelicula->id) }}" class="btn btn-sm btn-outline-primary">
                            ✏️ Editar
                        </a>
                        <a href="{{ route('eliminar', $pelicula->id) }}" class="btn btn-sm btn-outline-danger" onclick="return confirm('¿Seguro que deseas eliminar esta película?')">
                            🗑️ Eliminar
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <div class="alert alert-info">
                    No hay películas registradas.
                </div>
            </div>
        @endforelse
    </div>

    {{-- Botón centrado al final --}}
    <div class="text-center mt-4">
        <a href="{{ route('agregar') }}" class="btn btn-success btn-lg">
            ➕ Agregar Película
        </a>
    </div>
</div>
@endsection
