<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('admin.pacientes.index',compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.pacientes.create');    
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //revisar que si sean los campos en la vista create porque si uno no se envia no sale la validacion 
     $request->validate([
            'nombres' => 'required',
            'apellidos'=> 'required',
            'curp' => 'required|unique:pacientes',
            'numero_seguro' => 'required|unique:pacientes',
            'fecha_nacimiento'=> 'required',
            'genero' => 'required',
            'celular'=> 'required',
            'correo'=> 'required|max:250|unique:pacientes',
            'direccion' => 'required',
            'grupo_sanguineo' => 'required',
            'alergias' => 'required',
            'contacto_emergencia' => 'required',
            ]);
            $paciente = new Paciente();
            $paciente->nombres = $request->nombres;
            $paciente->apellidos = $request->apellidos;
            $paciente->curp = $request->curp;
            $paciente->numero_seguro = $request->numero_seguro;
            $paciente->fecha_nacimiento = $request->fecha_nacimiento;
            $paciente->genero = $request->genero;
            $paciente->celular = $request->celular;
            $paciente->correo = $request->correo;
            $paciente->direccion = $request->direccion;
            $paciente->grupo_sanguineo = $request->grupo_sanguineo;
            $paciente->alergias = $request->alergias;
            $paciente->contacto_emergencia = $request->contacto_emergencia;
            $paciente->observaciones = $request->observaciones;

            $paciente->save();
            return redirect()->route('admin.pacientes.index')->with('mensaje','paciente resgistrado correctamente')->with('icono','success');








    
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
       $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.show',compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $paciente = Paciente::finD($id);

      return view('admin.pacientes.edit',compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
     //no poner 2 veces la instancia del paciente porque sino da error 
    {
        $paciente = Paciente::finD($id);
        $request->validate([
            'nombres' => 'required',
            'apellidos'=> 'required',
            'curp' => 'required|unique:pacientes,curp,'.$paciente->id,
            'numero_seguro' => 'required|unique:pacientes,numero_seguro,'.$paciente->id,
            'fecha_nacimiento'=> 'required',
            'genero' => 'required',
            'celular'=> 'required',
            'correo'=> 'required|max:250|unique:pacientes,correo,'.$paciente->id,
            'direccion' => 'required',
            'grupo_sanguineo' => 'required',
            'alergias' => 'required',
            'contacto_emergencia' => 'required',
            ]);
           
            $paciente->nombres = $request->nombres;
            $paciente->apellidos = $request->apellidos;
            $paciente->curp = $request->curp;
            $paciente->numero_seguro = $request->numero_seguro;
            $paciente->fecha_nacimiento = $request->fecha_nacimiento;
            $paciente->genero = $request->genero;
            $paciente->celular = $request->celular;
            $paciente->correo = $request->correo;
            $paciente->direccion = $request->direccion;
            $paciente->grupo_sanguineo = $request->grupo_sanguineo;
            $paciente->alergias = $request->alergias;
            $paciente->contacto_emergencia = $request->contacto_emergencia;
            $paciente->observaciones = $request->observaciones;

            $paciente->save();
            return redirect()->route('admin.pacientes.index')->with('mensaje','paciente actualizao correctamente')->with('icono','success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmDelete($id){
        $paciente = Paciente::findOrFail($id);
        return view('admin.pacientes.delete',compact('paciente'));

    }

    public function destroy($id)
    {
       $paciente = Paciente::find($id);
       $paciente->delete();
       return redirect()->route('admin.pacientes.index')->with('mensaje','paciente borrado correctamente')->with('icono','success');


    }
}
