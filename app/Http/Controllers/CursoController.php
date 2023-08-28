<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    
    public function index()
    {
    $datos = Curso::all();
      return view('\Curso_crud\inicio', compact('datos'));
    }

    
    public function create()
    {
        return view('\Curso_crud\agregar');
    }

    public function store(Request $request)
    {
       $cursos = new Curso();
       $cursos->materia = $request->post('materia');
       $cursos->calificacion = $request->post('calificacion');
       $cursos->save();

       return redirect()->route("cursos.index")->with("success","Agregado con exito");
    }

   
    public function delet($id)
    {
        $cursos = Curso::find($id);
        return view("/Curso_crud/eliminar", compact('cursos'));
     
    }

    
    public function edit($id)
    {
        $cursos = Curso::find($id);
        return view("\Curso_crud\actualizar", compact('cursos'));
      
    }

    
    public function update(Request $request, $id)
    {
        $cursos = Curso::find($id);
        $cursos->materia = $request->post('materia');
       $cursos->calificacion = $request->post('calificacion');
       $cursos->save();
 
        return redirect()->route("cursos.index")->with("success","Actualizado con exito"); 
    }

  
    public function destroy($id)
    {
        $cursos = Curso::find($id);
        $cursos -> delete();
        return redirect()->route("cursos.index")->with("success","Eliminado con exito"); 
    }
}
