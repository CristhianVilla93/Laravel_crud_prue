@extends('layout/plantilla')

@section('tituloPagina', 'crear un nuevo registro')

@section('contenido')
    <div class="card">
        <h5 class="card-header">Eliminar una persona</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro

                <table class="table table-sm table-hover">
                    <thead>
                        <th>Materia</th>
                        <th>Calificacion</th>
                    </thead>
                    <tbody>

                        <tr>
                            <td>{{ $cursos->materia }}</td>
                            <td>{{ $cursos->calificacion }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('cursos.destroy', $cursos->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('cursos.index') }}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </div>

            </p>

        </div>
    </div>

@endsection
