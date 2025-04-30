<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos = Medico::with('user')->get();
        return view('admin.medicos.index',compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicos = Medico::all();
      return view('admin.medicos.create',compact('medicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'apellidos'=>'required',
            'telefono'=>'required',
            'licencia_medica'=>'required',
            'especialidad'=>'required',
            'email'=>'required|max:250|unique:users',
            'password'=>'required|max:250|confirmed'
        ]);

        $usuario = new User();
        $usuario->name= $request->nombre;
        $usuario->email= $request->email;
        $usuario->password= Hash::make($request['password']);
        $usuario->save();

        $medico = new Medico();
        $medico->user_id= $usuario->id;
        $medico->nombre = $request->nombre;
        $medico->apellidos = $request->apellidos;
        $medico->telefono = $request->telefono;
        $medico->licencia_medica = $request->licencia_medica;
        $medico->especialidad = $request->especialidad;
        $medico->save();
        return redirect()->route('admin.medicos.index')->with('mensaje','medico registrado correctamente')->with('icono','success');






    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $medicos = Medico::with('user')->findOrFail($id);
        return view('admin.medicos.show',compact('medicos'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {  $medicos = Medico::with('user')->findOrFail($id);
        return view('admin.medicos.edit',compact('medicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $medicos = Medico::find($id);

        $request->validate([
            'nombre'=>'required',
            'apellidos'=>'required',
            'telefono'=>'required',
            'licencia_medica'=>'required',
            'especialidad'=>'required',
            'email'=>'required|max:250|unique:users,email,'.$medicos->user->id,
            'password'=>'nullable|max:250|confirmed',

            
        ]);
        
        $medicos->nombre = $request->nombre;
        $medicos->apellidos = $request->apellidos;
        $medicos->telefono = $request->telefono;
        $medicos->licencia_medica = $request->licencia_medica;
        $medicos->especialidad = $request->especialidad;
        $medicos->save();
        $usuario = User::find($medicos->user->id);
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;

        if($request->filled('password')){
            $usuario->password = Hash::make($request['password']);
        }
        $usuario->save();

        return redirect()->route('admin.medicos.index')->with('mensaje','Se actualizaron los datos del medico de manera correcta')->with('icono','success');






    
    }

    public function confirmDelete($id){
        $medicos = Medico::with('user')->findOrFail($id);

        return view('admin.medicos.delete', compact('medicos'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $medicos = Medico::find($id);
        $user = $medicos->user;
        $user->delete();
        $medicos->delete();
        return redirect()->route('admin.medicos.index')->with('mensaje','Se elimino los datos del medico de la manera correcta')->with('icono','success');


    }


}
