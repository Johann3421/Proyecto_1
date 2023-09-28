<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        // Tu lógica aquí
        $datos = Personas::all();
        return view('Inicio',compact('datos'));
    }

   
    public function create()
    {
        //el formulario donde nosotros agregaremos datos
        return view('agregar');
    }

    
    public function store(Request $request)
    {
        //Sirve para guardar datos en la bd
    }

    
    public function show(Personas $personas)
    {
        //servira para obtener un registro de nuestra tabla
    }

    
    public function edit(Personas $personas)
    {
        //este metodo nos sirve para traer los datos que se van a editar y los coloca en el formulario
        return view('actualizar');
    }

    
    public function update(Request $request, Personas $personas)
    {
        //este metodo actualiza los datos en bd
    }

    
    public function destroy(Personas $personas)
    {
        //elimina un registro
    }
}
