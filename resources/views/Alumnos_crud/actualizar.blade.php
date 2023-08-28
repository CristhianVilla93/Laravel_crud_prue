@extends('layout/plantilla')

@section('tituloPagina', 'crear un nuevo registro')

@section('contenido')
    <div class="card">
        <h5 class="card-header">Actualizar nueva persona</h5>
        <div class="card-body">
        
            <p class="card-text">
                <form action="{{ route("alumnos.update", $alumnos->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <label for="">Nombre</label>
                    <input type="text" name="name" class="form-control" required value="{{ $alumnos->name }}">
                    <label for="">Apellido</label>
                    <input type="text" name="lastname" class="form-control" required value="{{ $alumnos->lastname }}">
                    <label for="">Correo</label>
                    <input type="text" name="correo" class="form-control" required value="{{ $alumnos->correo }}">
                    <label for="">Contrasena</label>
                    <input type="text" name="contrase" class="form-control" required value="{{ $alumnos->contrase }}">
                   <br>
                   <a href="{{ route("alumnos.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                   <button class="btn btn-warning" >Actualizar</button>
                   
                </form>
            </p>
           
        </div>
    </div>

@endsection
