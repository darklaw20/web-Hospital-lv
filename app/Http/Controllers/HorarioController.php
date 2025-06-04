<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Http\Controllers\Controller;
use App\Models\Consultorio;
use App\Models\Medico;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultorios = Consultorio::all();
        $horarios = Horario::with('medico','consultorio')->get();
        return view('admin.horarios.index',compact('horarios','consultorios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicos = Medico::all();
        $consultorios = Consultorio::all();
                $horarios = Horario::with('medico','consultorio')->get();

        return view('admin.horarios.create',compact('medicos','consultorios','horarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'dia' => 'required',
            'hora_inicio' => 'required',
            'hora_fin'=> 'required',
            'consultorio_id'=> 'required|exists:consultorios,id', //  validar que el consultorio exista
        ]);


        //verificar si existe ya un horario para ese dia y rango de hora
        $horarioExistente = Horario::where('dia',$request->dia)
        ->where('consultorio_id', $request->consultorio_id) //filtrar por consultorio
        ->where(function ($query) use ($request){
            $query->where(function ($query) use ($request){
                 $query->where('hora_inicio', '>=' ,$request->hora_inicio)
                 ->where('hora_inicio', '<',$request->hora_fin);
            })
            ->orWhere(function ($query) use ($request){
                $query->where('hora_fin', '>' ,$request->hora_inicio)
                ->where('hora_inicio', '<=',$request->hora_fin);
            })
       ->orWhere(function ($query) use ($request){
            $query->where('hora_inicio', '<' ,$request->hora_inicio)
            ->where('hora_inicio', '>',$request->hora_fin);
            });

        }) ->exists();

        if($horarioExistente){
            return redirect()->back()->withInput()->with('mensaje','Ya existe un horario con los datos ingresados')->with('icono','error');


        }





        Horario::create($request->all());
        return redirect()->route('admin.horarios.index')->with('mensaje','horario  registrado correctamente')->with('icono','success');


        
    }

    /**
     * Display the specified resource.
     */

      public function cargar_datos_consultorio($id){
       
        try{
            $horarios = Horario::with('medico','consultorio')->where('consultorio_id',$id)->get();
            return view('admin.horarios.cargar_datos_consultorio',compact('horarios'));
           

        }catch(\Exception $exception){
            return response()->json(['mensaje' => 'Error']);
        }
    }
    public function show($id)
    {
        
        $horario = Horario::find($id);

        return view('admin.horarios.show',compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

     public function confirmDelete($id){
         $horario = Horario::with('medico','consultorio')->findOrFail($id);

        return view('admin.horarios.delete', compact('horario'));



     }
    
    public function destroy($id)
    {
        //
        $horario = Horario::find($id);
        //$medico = $horario->medico;
        //$consultorio = $horario->consultorio;
        //$medico->delete();
        //$consultorio->delete();
        //aqui solo se borra directo el horario porque no depende del id de otro esta en la cima de la consulta
        $horario->delete();
        return redirect()->route('admin.horarios.index')->with('mensaje','Se elimino el horario de manera correcta')->with('icono','success');



    }
}
