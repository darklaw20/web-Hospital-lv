<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secretarias = Secretaria::with('user')->get();
        return view('admin.secretarias.index',compact('secretarias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.secretarias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            $request->validate([
            'nombres' => 'required',
            'apellidos'=> 'required',
            'curp' => 'required|unique:secretarias',
            'telefono'=> 'required',
            'fecha_nacimiento'=> 'required',
            'direccion' => 'required',
            'email'=> 'required|max:250|unique:users',
            'password' => 'required|max:250|confirmed',

            ]);

            $usuario = new User();
            //en request poner el nombre de la variable de la secretaria para el nombre o sino da error que se crea nulo
            $usuario->name= $request->nombres;
            $usuario->email= $request->email;
            $usuario->password= Hash::make($request['password']);
            $usuario->save();



            $secretaria = new Secretaria();
            //este es para la llave foranea 
            $secretaria->user_id = $usuario->id;
            $secretaria->nombres = $request->nombres;
            $secretaria->apellidos = $request->apellidos;
            $secretaria->curp = $request->curp;
            $secretaria->telefono = $request->telefono;
            $secretaria->direccion = $request->direccion;
            $secretaria->fecha_nacimiento = $request->fecha_nacimiento;
            $secretaria->save();

         return redirect()->route('admin.secretarias.index')->with('mensaje','secretaria resgistrada correctamente')->with('icono','success');
        
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $secretaria = Secretaria::with('user')->findOrFail($id);
        return view('admin.secretarias.show',compact('secretaria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $secretaria = Secretaria::with('user')->findOrFail($id);
        return view('admin.secretarias.edit',compact('secretaria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $secretaria = Secretaria::find($id);

        $request->validate([
            'nombres' => 'required',
            'apellidos'=> 'required',
            'curp' => 'required|unique:secretarias,curp,'.$secretaria->id,
            'telefono'=> 'required',
            'fecha_nacimiento'=> 'required',
            'direccion' => 'required',
            'email'=> 'required|max:250|unique:users,email,'.$secretaria->user->id,
            'password' => 'nullable|max:250|confirmed',

            ]);
            $secretaria->nombres = $request->nombres;
            $secretaria->apellidos = $request->apellidos;
            $secretaria->curp = $request->curp;
            $secretaria->telefono = $request->telefono;
            $secretaria->direccion = $request->direccion;
            $secretaria->fecha_nacimiento = $request->fecha_nacimiento;
            $secretaria->save();

            $usuario =User::find($secretaria->user->id);
            $usuario->name= $request->nombres;
            $usuario->email= $request->email;
            if($request->filled('password')){
                $usuario->password= Hash::make($request['password']);

            }
            $usuario->save();
           
            return redirect()->route('admin.secretarias.index')->with('mensaje','secretaria actualizada correctamente')->with('icono','success');


    }

    /**
     * Remove the specified resource from storage.
     */

    public function confirmDelete($id){
        
        $secretaria = Secretaria::with('user')->findOrFail($id);

        return view('admin.secretarias.delete', compact('secretaria'));

    }

    public function destroy($id)

    {
        $secretaria = Secretaria::find($id);
        //eliminar al usuario asociado 
        $user = $secretaria->user;
        $user->delete();

        //eliminar a la secretaria
        $secretaria->delete();
        return redirect()->route('admin.secretarias.index')->with('mensaje','Se elimino a la secretaria de la manera correcta')->with('icono','success');
    }
}
