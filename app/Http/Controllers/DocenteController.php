<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    
    public function index()
    {
    $datos = Docente::all();
    
      return view('\Docente_crud\inicio', compact('datos'));
    }

    
    public function create()
    {
        return view('\Docente_crud\agregar');
    }

    public function store(Request $request)
    {
       $docentes = new Docente();
       $docentes->nombre = $request->post('nombre');
       $docentes->correo = $request->post('correo');
       $docentes->contrase = $request->post('contrase');
       $docentes->save();

       return redirect()->route("docentes.index")->with("success","Agregado con exito");
    }

   
    public function delet($id)
    {
        $docentes = Docente::find($id);
        return view("/Docente_crud/eliminar", compact('docentes'));
     
    }

    
    public function edit($id)
    {
        $docentes = Docente::find($id);
        return view("\Docente_crud\actualizar", compact('docentes'));
      
    }

    
    public function update(Request $request, $id)
    {
        $docentes = Docente::find($id);
        $docentes->nombre = $request->post('nombre');
       $docentes->correo = $request->post('correo');
       $docentes->contrase = $request->post('contrase');
       $docentes->save();
 
        return redirect()->route("docentes.index")->with("success","Actualizado con exito"); 
    }

  
    public function destroy($id)
    {
        $docentes = Docente::find($id);
        $docentes -> delete();
        return redirect()->route("docentes.index")->with("success","Eliminado con exito"); 
    }
}
