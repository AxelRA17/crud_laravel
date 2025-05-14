<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function editar_usuario(Request $request){
        $consulta = Catalogo::where("id",$request->id)->first();
        return view("editar",["titulo"=>"Editar","pelicula"=>$consulta]);
    }
    public function actualizar_usuario(Request $request, Catalogo $pelicula){

        $pelicula->titulo = $request->titulo;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->genero = $request->genero;
        $pelicula->director = $request->director;
        $pelicula->fecha_estreno = $request->fecha_estreno;
        $pelicula->save();

        return redirect()->route('listado');
    }
    public function register(){
        return view("register",["titulo"=>"register"]);
    }
    public function insertar_usuario(Request $request, Usuario $usuario){
        $usuario->nombre = $request->nombre;
        $usuario->correo = $request->correo;
        $usuario->password = $request->password;
        $usuario->save();

        return redirect()->route('inicio');
    }
    public function eliminar_usuario(Request $request, Catalogo $pelicula){
        $pelicula = Catalogo::where("id",$request->id)->first();
        $pelicula->delete();
        return redirect()->route('listado');
    }
    public function login(){
        return view("login",["titulo"=>"login"]);
    }
}
