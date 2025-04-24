@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Usuario : {{$paciente->nombres}}  {{$paciente->apellidos}} </h1>
    </div>
    
    <div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-danger">
              <div class="card-header">
                <h3 class="card-title">¿Estas Seguro de eliminar el registro?</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
               
              <div class="card-body" >

             
              <form action="{{url('/admin/pacientes',$paciente->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <div class="row">
                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Nombres </label>
                              <input type="text" name="nombres" value ="{{$paciente->nombres}}" class="form-control" disabled >
                              @error('name')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Apellidos </label> <b>*</b>
                              <input type="text" name="apellidos" value ="{{$paciente->nombres}}" class="form-control" disabled>
                              @error('apellidos')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">CURP </label> <b>*</b>
                              <input type="text" name="curp" value ="{{$paciente->curp}}" class="form-control" disabled >
                              @error('CURP')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Numero de Seguro </label> <b>*</b>
                              <input type="text" name="numero_seguro" value ="{{$paciente->numero_seguro}}" class="form-control" disabled>
                              @error('numero_seguro')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Fecha de nacimiento</label> <b>*</b>
                              <input type="date" name="fecha_nacimiento" value ="{{$paciente->fecha_nacimiento}}" class="form-control" disabled>
                              @error('fecha_nacimiento')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

             
                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Genero</label> 
                              <select name="genero" class="form-control" id="" disabled>
                                  <option value="M" @selected($paciente->genero== 'M')>masculino</option>
                                  <option value="F" @selected($paciente->genero== 'F')>FEMENINO</option>
                              </select>
                          </div>
                        </div>


                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">celular</label> 
                              <input type="text" name="celular" value ="{{$paciente->celular}}" class="form-control" disabled>
                              @error('celular')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">correo</label> 
                              <input type="email" name="correo" value ="{{$paciente->correo}}" class="form-control" disabled>
                              @error('correo')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form group">
                              <label for="">direccion</label>
                              <input type="address" name="direccion" value ="{{$paciente->direccion}}" class="form-control" disabled>
                              @error('direccion')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Grupo Sanguineo</label> 
                              <select name="grupo_sanguineo" class="form-control" id="" disabled>
                                  
                                  <option value="A+" @selected($paciente->grupo_sanguineo== 'A+')>A+</option>
                                  <option value="A-"@selected($paciente->grupo_sanguineo== 'A-')>A-</option>
                                  <option value="B+" @selected($paciente->grupo_sanguineo== 'B+')>B+</option>
                                  <option value="B-"@selected($paciente->grupo_sanguineo== 'B-')>B-</option>
                                  <option value="O+"@selected($paciente->grupo_sanguineo== 'O+')>O+</option>
                                  <option value="O-"@selected($paciente->grupo_sanguineo== 'O-')>O-</option>
                                  <option value="AB+"@selected($paciente->grupo_sanguineo== 'AB+')>AB+</option>
                              </select>
                          </div>
                        </div>


                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">alergias</label> 
                              <input type="text" name="alergias" value ="{{$paciente->alergias}}" class="form-control" disabled>
                              @error('alergias')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Contacto De Emergencia</label> <b>*</b>
                              <input type="number" name="contacto_emergencia" value ="{{$paciente->contacto_emergencia}}" class="form-control"disabled >
                              @error('contacto_emergencia')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>


                        <div class="col-md-9">
                          <div class="form group">
                              <label for="">observaciones</label> <b>*</b>
                              <input type="text" name="observaciones" value ="{{$paciente->observaciones}}" class="form-control" disabled>
                              @error('observaciones')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>


                        



                      </div> <!-- aqui termina el div para contenido este por partes en el row--> 

                    

                      
                  
                      
                    

                      <br>
                      <hr>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form group">
                            <a href="{{url('admin/pacientes')}}" class="btn btn-secondary">cancelar</a>
                            <button type="submit" class="btn btn-danger">Borrar Paciente</button>
                          </div>
                        </div>
                      </div>

                    </div>

            
                 
        
              <!-- /.card-body -->
            </div>





              </form>

            <!-- /.card -->
          </div>
        

    </div>
@endsection