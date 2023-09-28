<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        // Tu lógica aquí
        
        return view('Inicio');
    }

   
    public function create()
    {
        //el formulario donde nosotros agregaremos datos
        return "aqui puedes agregar";
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
        return "Aqui se actualiza";
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
