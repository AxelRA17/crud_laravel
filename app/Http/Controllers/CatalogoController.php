<?php

namespace App\Http\Controllers;
use App\Models\Catalogo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CatalogoController extends Controller
{
    public function inicio(){
        return view("home",["titulo"=>"Inicio"]);
    }
    public function listado_peliculas(){
        $consulta = Catalogo::select()->get();
        $datos = $consulta;
        return view("listado_peliculas",["titulo"=>"Lista","datos"=>$datos]);
    }
    public function agregar(){
        return view("agregar",["titulo"=>"Agregar pelicula"]);
    }
    public function editar(Request $request){
        $consulta = Catalogo::where("id",$request->id)->first();
        return view("editar",["titulo"=>"Editar","pelicula"=>$consulta]);
    }
    public function actualizar(Request $request, Catalogo $pelicula){

        $pelicula->titulo = $request->titulo;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->genero = $request->genero;
        $pelicula->director = $request->director;
        $pelicula->fecha_estreno = $request->fecha_estreno;
        $pelicula->save();

        return redirect()->route('listado');
    }
    public function insertar_pelicula(Request $request, Catalogo $pelicula){
        $pelicula->titulo = $request->titulo;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->genero = $request->genero;
        $pelicula->director = $request->director;
        $pelicula->fecha_estreno = $request->fecha_estreno;
        $pelicula->save();

        return redirect()->route('listado');
    }
    public function eliminar_pelicula(Request $request, Catalogo $pelicula){
        $pelicula = Catalogo::where("id",$request->id)->first();
        $pelicula->delete();
        return redirect()->route('listado');
    }
}
