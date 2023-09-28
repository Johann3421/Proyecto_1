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
        $personas = new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route('Personas.index')->with("succes","Agregado con exito!");
    }

    
    public function show(Personas $personas)
    {
        //servira para obtener un registro de nuestra tabla
        return view('eliminar');
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
