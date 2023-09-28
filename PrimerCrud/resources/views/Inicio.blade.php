@extends('Layout/plantilla')

@section('tituloPagina','Crud con Laravel')

@section('contenido')

<div class="card">
  <div class="card-header">
    CRUD con laravel 10 y MySQL
  </div>
  <div class="card-body">
    <h5 class="card-title">Listado de personas en sistema</h5>
    <p>
        <a href="{{ route("Personas.create")}}">Agregar nueva Persona</a>
    </p>
    <p class="card-text">
    <div class="table table-responsive">
        <table class="table table-sm table-bordered">
            <thead>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Nombre</td>
                <td>Fecha de Nacimiento</td>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
</div>
@endsection