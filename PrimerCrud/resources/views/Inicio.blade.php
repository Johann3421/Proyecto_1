@extends('Layout/plantilla')

@section('tituloPagina','Crud con Laravel')

@section('contenido')

<div class="card">
  <div class="card-header">
    CRUD con laravel 10 y MySQL
  </div>
  <div class="card-body">
    <h5 class="card-title">Listado de personas en sistema</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    <div class="row">
        <h1>Hola usando layouts</h1>
        <i class="fa-solid fa-house"></i>
        <a href="{{ route('Personas.create')}}">Agregar</a>
    </div>
@endsection