@extends('Layout/plantilla')

@section('tituloPagina','Crud con Laravel')

@section('contenido')

<div class="card">
  <div class="card-header">
    CRUD con laravel 10 y MySQL
  </div>
  <div class="card-body">
    <h5 class="card-title text-center">Listado de personas en sistema</h5>
    <p>
        <a href="{{ route("Personas.create")}}" class="btn btn-primary">Agregar nueva Persona</a>
    </p>
    <hr>
    
    <p class="card-text">
    <div class="table table-responsive">
        <table class="table table-sm table-bordered">
            <thead>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                <th>Fecha de Nacimiento</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
            @foreach($datos as $item)

            
                <tr>
                    <td>{{ $item->paterno }}</td>
                    <td>{{ $item->materno }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->fecha_nacimiento }}</td>
                    <td></td>
                    <td></td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
  </div>
</div>
@endsection