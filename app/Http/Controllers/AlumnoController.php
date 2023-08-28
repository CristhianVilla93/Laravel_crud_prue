<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    
    public function index()
    {
    $datos = Alumno::all();
    
      return view('\Alumnos_crud\inicio', compact('datos'));
    }

    
    public function create()
    {
        return view('\Alumnos_crud\agregar');
    }

    public function store(Request $request)
    {
       $alumnos = new Alumno();
       $alumnos->name = $request->post('name');
       $alumnos->lastname = $request->post('lastname');
       $alumnos->correo = $request->post('correo');
       $alumnos->contrase = $request->post('contrase');
       $alumnos->save();

       return redirect()->route("alumnos.index")->with("success","Agregado con exito");
    }

   
    public function delet($id)
    {
        $alumnos = Alumno::find($id);
        return view("/Alumnos_crud/eliminar", compact('alumnos'));
     
    }

    
    public function edit($id)
    {
        $alumnos = Alumno::find($id);
        return view("\Alumnos_crud\actualizar", compact('alumnos'));
      
    }

    
    public function update(Request $request, $id)
    {
        $alumnos = Alumno::find($id);
        $alumnos->name = $request->post('name');
       $alumnos->lastname = $request->post('lastname');
       $alumnos->correo = $request->post('correo');
       $alumnos->contrase = $request->post('contrase');
       $alumnos->save();
 
        return redirect()->route("alumnos.index")->with("success","Actualizado con exito"); 
    }

  
    public function destroy($id)
    {
        $alumnos = Alumno::find($id);
        $alumnos -> delete();
        return redirect()->route("alumnos.index")->with("success","Eliminado con exito"); 
    }
}
