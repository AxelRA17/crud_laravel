@extends('plantilla')

@section('contenido')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-body p-4">
                    <h3 class="mb-4 text-center">✏️ Editar Película</h3>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('actualizar', $pelicula->id) }}">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" name="titulo"
                                   value="{{ old('titulo', $pelicula->titulo) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" name="descripcion" rows="4" required>{{ old('descripcion', $pelicula->descripcion) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="genero" class="form-label">Género</label>
                            <input type="text" class="form-control" name="genero"
                                   value="{{ old('genero', $pelicula->genero) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="director" class="form-label">Director</label>
                            <input type="text" class="form-control" name="director"
                                   value="{{ old('director', $pelicula->director) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="fecha_estreno" class="form-label">Fecha de Estreno</label>
                            <input type="date" class="form-control" name="fecha_estreno"
                                   value="{{ old('fecha_estreno', $pelicula->fecha_estreno) }}" required>
                        </div>

                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('listado') }}" class="btn btn-outline-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary">💾 Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
