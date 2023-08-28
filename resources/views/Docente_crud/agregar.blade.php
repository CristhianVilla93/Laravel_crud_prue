@extends('layout/plantilla')

@section('tituloPagina', 'crear un nuevo registro')

@section('contenido')
    <div class="card">
        <h5 class="card-header">Agregar Nuevo</h5>
        <div class="card-body">
           
            <p class="card-text">
                <form action="{{ route('docentes.store') }}" method="POST">
                    @csrf
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                    <label for="">Correo</label>
                    <input type="text" name="correo" class="form-control" required>
                    <label for="">Contrasena</label>
                    <input type="password" name="contrase" class="form-control" required>
                   <br>
                   <a href="{{ route("docentes.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                   <button class="btn btn-primary" >Agregar</button>
                   
                </form>
            </p>
           
        </div>
    </div>

@endsection
