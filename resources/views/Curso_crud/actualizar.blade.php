@extends('layout/plantilla')

@section('tituloPagina', 'crear un nuevo registro')

@section('contenido')
    <div class="card">
        <h5 class="card-header">Actualizar nueva persona</h5>
        <div class="card-body">
        
            <p class="card-text">
                <form action="{{ route("cursos.update", $cursos->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <label for="">Materia</label>
                    <input type="text" name="materia" class="form-control" required value="{{ $cursos->materia }}">
                    <label for="">Calificacion</label>
                    <input type="text" name="calificacion" class="form-control" required value="{{ $cursos->lastname }}">
                   <br>
                   <a href="{{ route("cursos.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                   <button class="btn btn-warning" >Actualizar</button>
                   
                </form>
            </p>
           
        </div>
    </div>

@endsection
