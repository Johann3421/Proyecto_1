<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
   
    public function index()
    {
        //Pagina de inicio
    }

   
    public function create()
    {
        //el formulario donde nosotros agregaremos datos
    }

    
    public function store(Request $request)
    {
        //Sirve para guardar datos
    }

    
    public function show(Personas $personas)
    {
        //
    }

    
    public function edit(Personas $personas)
    {
        //
    }

    
    public function update(Request $request, Personas $personas)
    {
        //
    }

    
    public function destroy(Personas $personas)
    {
        //
    }
}
