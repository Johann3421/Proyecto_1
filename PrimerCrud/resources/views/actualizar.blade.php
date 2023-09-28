@extends('Layout/plantilla')

@section('tituloPagina','Crear un Nuevo Registro')

@section('contenido')
<div class="card">
  <div class="card-header">
    Actualizar Nueva Persona
  </div>
  <div class="card-body">

    <p class="card-text">
        <form action="#">
            <label for="">Apellido paterno</label>
            <input type="text" name="paterno" class="form-control" required>
            <label for="">Apellido Materno</label>
            <input type="text" name="materno" class="form-control" required>
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
            <br>
            <a href="{{ route("Personas.index") }}" class="btn btn-secondary">Regresar</a>
            <button class="btn btn-warning">Actualizar</button>
            
        </form>
    </p>
    
  </div>
</div>
@endsection