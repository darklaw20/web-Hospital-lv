<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Consultorio;
use App\Models\Medico;
use App\Models\Paciente;
use App\Models\Secretaria;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $total_usuarios= User::count();
        $total_secretarias = Secretaria::count();
        $total_pacientes = Paciente::count();
        $total_consultorios = Consultorio::count();
        $total_medicos = Medico::count();
        return view('admin.index',compact('total_usuarios','total_secretarias','total_pacientes','total_consultorios','total_medicos'));
    }//
}
