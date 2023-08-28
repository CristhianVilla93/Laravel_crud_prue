@extends('layout/plantilla')

@section('tituloPagina', 'Crud con laravel')

@section('contenido')
   
    <div class="card">
        <div>
            <span><a href="{{ route("alumnos.index") }}">Alumnos</a></span>
            <span><a href="{{ route("docentes.index") }}">Docentes</a></span>
            <span><a href="{{ route("cursos.index") }}">Cursos</a></span>
        </div>
        <h5 class="card-header">Crud Curso</h5>
        <div class="card-body">

            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                        
                    @endif

                </div>
            </div>
            <h5 class="card-title">listado de Alumnos en el sistema</h5>
            <p>
                <a class="btn btn-primary" href="{{ route("cursos.create") }}">Agregar nuevo alumno</a>
            </p>
           

            <p class="card-text"></p>
           <div class="table table-responsive">
            <table class="table table-sm table-bordered"> 
                <thead>
                   
                    <th>Materia</th>
                    <th>Calificacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    @foreach ($datos as $items)
                        
                   
                    <tr>
                        <td>{{ $items->materia }}</td>
                        <td>{{ $items->calificacion }}</td>
                        
                        <td>
                            <form action="{{ route("cursos.edit", $items->id) }}" method="GET">
                                <button class="btn btn-warning btn-sm">
                                    <span class="fas fa-user-edit"></span>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route("cursos.delet", $items->id) }}" method="GET">
                                <button class="btn btn-danger btn-sm">
                                    <span class="fas fa-user-times"></span>
                                </button>
                            </form>
                        </td>
                        {{-- <td>
                        
                         @foreach ( $items->docentes as $docente)
                            {{ $docente->nombre}} <br>
                         @endforeach
                           
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
           </div>
        </div>
    </div>

 
@endsection
