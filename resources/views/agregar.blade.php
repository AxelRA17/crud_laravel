@extends('plantilla')
@section('contenido')
<form action="{{route('insercion')}}" method="post" >
    @csrf
    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" name="titulo" value="">
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" name="descripcion"></textarea>
    </div>

    <div class="mb-3">
        <label for="genero" class="form-label">Género</label>
        <input type="text" class="form-control" name="genero" value="">
    </div>

    <div class="mb-3">
        <label for="director" class="form-label">Director</label>
        <input type="text" class="form-control" name="director" value="">
    </div>

    <div class="mb-3">
        <label for="fecha_estreno" class="form-label">Fecha de Estreno</label>
        <input type="date" class="form-control" name="fecha_estreno" value="">
    </div>

    <button type="submit" class="btn btn-success">Agregar</button>
    <a href="{{route('listado')}}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection