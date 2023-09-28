@extends('Layout/plantilla')

@section('tituloPagina','Crear un Nuevo Registro')

@section('contenido')
<div class="card">
  <div class="card-header">
    Agregar Nueva Persona
  </div>
  <div class="card-body">

    <p class="card-text">
        <form action="{{ route('Personas.store') }}" method="POST">
            @csrf
            <label for="">Apellido paterno</label>
            <input type="text" name="paterno" class="form-control" required>
            <label for="">Apellido Materno</label>
            <input type="text" name="materno" class="form-control" required>
            <label for="">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
            <br>
            <a href="{{ route("Personas.index") }}" class="btn btn-secondary">
                <span class="fa-solid fa-rotate-left"></span> Regresar</a>
            <button class="btn btn-primary">
                <span class="fa-solid fa-user-plus"></span> Agregar
            </button>
            
        </form>
    </p>
    
  </div>
</div>
@endsection