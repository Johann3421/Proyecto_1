<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        // Tu lógica aquí
        $datos = Personas::orderBy('paterno','desc')->paginate(2);
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

    
    public function show($id)
    {
        //servira para obtener un registro de nuestra tabla
        $persona = Personas::find($id);
        return view("eliminar",compact('persona'));
        
    }

    
    public function edit($id)
    {
        //este metodo nos sirve para traer los datos que se van a editar y los coloca en el formulario
        $persona = Personas::find($id);
        return view("actualizar",compact('persona'));
    }

    
    public function update(Request $request,$id)
    {
        //este metodo actualiza los datos en bd
        $personas = Personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route('Personas.index')->with("succes","Actualizado con exito!");
    }

    
    public function destroy($id)

    {
        //elimina un registro
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route("Personas.index")->with("succes", "Eliminado con exito");
    }
}
