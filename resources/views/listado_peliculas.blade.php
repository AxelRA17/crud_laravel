@extends('plantilla')
@section('contenido')
    <div class="container mt-4">
        <h2 class="mb-4">Listado de Películas</h2>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Género</th>
                    <th>Director</th>
                    <th>Fecha de Estreno</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $pelicula)
                    <tr>
                        <td>{{ $pelicula->titulo }}</td>
                        <td>{{ $pelicula->descripcion }}</td>
                        <td>{{ $pelicula->genero }}</td>
                        <td>{{ $pelicula->director }}</td>
                        <td>{{ $pelicula->fecha_estreno }}</td>
                        <td>
                            <a href="{{route('editar',$pelicula->id)}}" class="btn btn-sm btn-warning">Editar</a>
                            <a href="{{route('eliminar',$pelicula->id)}}" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection