<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//rutas para el admin
Route::get('/admin',[App\Http\Controllers\AdminController::class,'index'])->name('admin.index')->middleware('auth');
//rutas para el admin-usuarios
Route::get('/admin/usuarios',[App\Http\Controllers\UsuarioController::class,'index'])->name('admin.usuarios.index')->middleware('auth');
//rutas para el admin-create-usuarios
Route::get('/admin/usuarios/create',[App\Http\Controllers\UsuarioController::class,'create'])->name('admin.usuarios.create')->middleware('auth');
Route::post('/admin/usuarios/create',[App\Http\Controllers\UsuarioController::class,'store'])->name('admin.usuarios.store')->middleware('auth');
Route::get('/admin/usuarios/{id}',[App\Http\Controllers\UsuarioController::class,'show'])->name('admin.usuarios.show')->middleware('auth');
Route::get('/admin/usuarios/{id}/edit',[App\Http\Controllers\UsuarioController::class,'edit'])->name('admin.usuarios.edit')->middleware('auth');
Route::put('/admin/usuarios/{id}',[App\Http\Controllers\UsuarioController::class,'update'])->name('admin.usuarios.update')->middleware('auth');
Route::get('/admin/usuarios/{id}/confirm-delete',[App\Http\Controllers\UsuarioController::class,'confirmDelete'])->name('admin.usuarios.confirmDelete')->middleware('auth');
Route::delete('/admin/usuarios/{id}',[App\Http\Controllers\UsuarioController::class,'destroy'])->name('admin.usuarios.destroy')->middleware('auth');


////rutas para secretarias-admin
Route::get('/admin/secretarias',[App\Http\Controllers\SecretariaController::class,'index'])->name('admin.secretarias.index')->middleware('auth');
Route::get('/admin/secretarias/create',[App\Http\Controllers\SecretariaController::class,'create'])->name('admin.secretarias.create')->middleware('auth');
Route::post('/admin/secretarias/create',[App\Http\Controllers\SecretariaController::class,'store'])->name('admin.secretarias.store')->middleware('auth');
Route::get('admin/secretarias/{id}',[App\Http\Controllers\SecretariaController::class,'show'])->name('admin.secretarias.show')->middleware('auth');
Route::get('admin/secretarias/{id}/edit',[App\Http\Controllers\SecretariaController::class,'edit'])->name('admin.secretarias.edit')->middleware('auth');
Route::put('admin/secretarias/{id}',[App\Http\Controllers\SecretariaController::class,'update'])->name('admin.secretarias.update')->middleware('auth');
Route::get('/admin/secretarias/{id}/confirm-delete',[App\Http\Controllers\SecretariaController::class,'confirmDelete'])->name('admin.secretarias.confirmDelete')->middleware('auth');
Route::delete('/admin/secretarias/{id}',[App\Http\Controllers\SecretariaController::class,'destroy'])->name('admin.secretarias.destroy')->middleware('auth');

////rutas para pacientes-admin
Route::get('admin/pacientes',[App\Http\Controllers\PacienteController::class,'index'])->name('admin.pacientes.index')->middleware('auth');
Route::get('admin/pacientes/create',[App\Http\Controllers\PacienteController::class,'create'])->name('admin.pacientes.create')->middleware('auth');
Route::post('admin/pacientes/create',[App\Http\Controllers\PacienteController::class,'store'])->name('admin.pacientes.store')->middleware('auth');
Route::get('admin/pacientes/{id}',[App\Http\Controllers\PacienteController::class,'show'])->name('admin.pacientes.show')->middleware('auth');
Route::get('admin/pacientes/{id}/edit',[App\Http\Controllers\PacienteController::class,'edit'])->name('admin.pacientes.edit')->middleware('auth');
Route::put('admin/pacientes/{id}',[App\Http\Controllers\PacienteController::class,'update'])->name('admin.pacientes.update')->middleware('auth');
Route::get('/admin/pacientes/{id}/confirm-delete',[App\Http\Controllers\PacienteController::class,'confirmDelete'])->name('admin.pacientes.confirmDelete')->middleware('auth');
Route::delete('/admin/pacientes/{id}',[App\Http\Controllers\PacienteController::class,'destroy'])->name('admin.pacientes.destroy')->middleware('auth');


////rutas para consultorios-admin
Route::get('admin/consultorios',[App\Http\Controllers\ConsultorioController::class,'index'])->name('admin.consultorios.index')->middleware('auth');
Route::get('admin/consultorios/create',[App\Http\Controllers\ConsultorioController::class,'create'])->name('admin.consultorios.create')->middleware('auth');
Route::post('admin/consultorios/create',[App\Http\Controllers\ConsultorioController::class,'store'])->name('admin.consultorios.store')->middleware('auth');
Route::get('admin/consultorios/{id}',[App\Http\Controllers\ConsultorioController::class,'show'])->name('admin.consultorios.show')->middleware('auth');
Route::get('admin/consultorios/{id}/edit',[App\Http\Controllers\ConsultorioController::class,'edit'])->name('admin.consultorios.edit')->middleware('auth');
Route::put('admin/consultorios/{id}',[App\Http\Controllers\ConsultorioController::class,'update'])->name('admin.consultorios.update')->middleware('auth');
Route::get('/admin/consultorios/{id}/confirm-delete',[App\Http\Controllers\ConsultorioController::class,'confirmDelete'])->name('admin.consultorios.confirmDelete')->middleware('auth');
Route::delete('/admin/consultorios/{id}',[App\Http\Controllers\ConsultorioController::class,'destroy'])->name('admin.consultorios.destroy')->middleware('auth');


////rutas para medicos-admin
Route::get('admin/medicos',[App\Http\Controllers\MedicoController::class,'index'])->name('admin.medicos.index')->middleware('auth');
Route::get('admin/medicos/create',[App\Http\Controllers\MedicoController::class,'create'])->name('admin.medicos.create')->middleware('auth');
Route::post('admin/medicos/create',[App\Http\Controllers\MedicoController::class,'store'])->name('admin.medicos.store')->middleware('auth');
Route::get('admin/medicos/{id}',[App\Http\Controllers\MedicoController::class,'show'])->name('admin.medicos.show')->middleware('auth');
Route::get('admin/medicos/{id}/edit',[App\Http\Controllers\MedicoController::class,'edit'])->name('admin.medicos.edit')->middleware('auth');
Route::put('admin/medicos/{id}',[App\Http\Controllers\MedicoController::class,'update'])->name('admin.medicos.update')->middleware('auth');
Route::get('/admin/medicos/{id}/confirm-delete',[App\Http\Controllers\MedicoController::class,'confirmDelete'])->name('admin.medicos.confirmDelete')->middleware('auth');
Route::delete('/admin/medicos/{id}',[App\Http\Controllers\MedicoController::class,'destroy'])->name('admin.medicos.destroy')->middleware('auth');


