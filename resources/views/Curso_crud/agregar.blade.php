@extends('layout/plantilla')

@section('tituloPagina', 'crear un nuevo registro')

@section('contenido')
    <div class="card">
        <h5 class="card-header">Agregar Nuevo</h5>
        <div class="card-body">
           
            <p class="card-text">
                <form action="{{ route('cursos.store') }}" method="POST">
                    @csrf
                    <label for="">Materia</label>
                    <input type="text" name="materia" class="form-control" required>
                    <label for="">Calificacion</label>
                    <input type="text" name="calificacion" class="form-control" required>
                   <br>
                   <a href="{{ route("cursos.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                   <button class="btn btn-primary" >Agregar</button>
                   
                </form>
            </p>
           
        </div>
    </div>

@endsection
