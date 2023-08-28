@extends('layout/plantilla')

@section('tituloPagina', 'crear un nuevo registro')

@section('contenido')
    <div class="card">
        <h5 class="card-header">Actualizar nueva persona</h5>
        <div class="card-body">
        
            <p class="card-text">
                <form action="{{ route("docentes.update", $docentes->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required value="{{ $docentes->nombre }}">
                    <label for="">Correo</label>
                    <input type="text" name="correo" class="form-control" required value="{{ $docentes->correo }}">
                    <label for="">Contrasena</label>
                    <input type="text" name="contrase" class="form-control" required value="{{ $docentes->contrase }}">
                   <br>
                   <a href="{{ route("docentes.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                   <button class="btn btn-warning" >Actualizar</button>
                   
                </form>
            </p>
           
        </div>
    </div>

@endsection
