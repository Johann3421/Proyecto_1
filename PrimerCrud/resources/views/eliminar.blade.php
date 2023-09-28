@extends('Layout/plantilla')

@section('tituloPagina','Crear un Nuevo Registro')

@section('contenido')
<div class="card">
  <div class="card-header">
    Eliminar una persona!
  </div>
  <div class="card-body">

    <p class="card-text">
    <div class="alert alert-danger" role="alert">
        Estas seguro de eliminar este registro!!!

        <table class="table table-sm table-hover">
            <thead>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombre</th>
                <th>Fecha de Nacimiento</th>
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
        <hr>
        <form action="">
        <a href="{{ route("Personas.index") }}" class="btn btn-secondary">
                <span class="fa-solid fa-rotate-left"></span> Regresar</a>
            <button class="btn btn-danger"> <span class="fa-solid fa-user-xmark"></span> Eliminar</button>
        </form>
    </div>
            
        </form>
    </p>
    
  </div>
</div>
@endsection