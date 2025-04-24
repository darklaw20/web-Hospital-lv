@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Paciente {{$paciente->nombres}}</h1>
    </div>
    
    <div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Verifique datos</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
               
              <div class="card-body" >

             
                  <div class="row">
                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Nombres </label>
                              <input type="text" name="nombres" value ="{{$paciente->nombres}}" class="form-control" disabled>
                             
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Apellidos </label> <b>*</b>
                              <input type="text" name="apellidos" value ="{{old($paciente->apellidos)}}" class="form-control" disabled>
                             
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">CURP </label> <b>*</b>
                              <input type="text" name="curp" value ="{{$paciente->curp}}" class="form-control" disabled>
                          
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Numero de Seguro </label> <b>*</b>
                              <input type="text" name="numero_seguro" value ="{{$paciente->numero_seguro}}" class="form-control" disabled>
                             
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Fecha de nacimiento</label> <b>*</b>
                              <input type="date" name="fecha_nacimiento" value ="{{$paciente->fecha_nacimiento}}" class="form-control" disabled>
                            
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Genero</label> 
                            
                               <input type="text" name="genero" class="form-control" value="{{$paciente->genero}}" disabled>
                             
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">celular</label> 
                              <input type="text" name="celular" value ="{{$paciente->celular}}" class="form-control" disabled>
                              
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">correo</label> 
                              <input type="email" name="correo" value ="{{$paciente->correo}}" class="form-control" disabled>
                             
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form group">
                              <label for="">direccion</label>
                              <input type="address" name="direccion" value ="{{$paciente->direccion}}" class="form-control" disabled>
                            
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Grupo Sanguineo</label> 
                              <input type="text" name="grupo_sanguineo" class="form-control" value="{{$paciente->grupo_sanguineo}}" disabled>
                          </div>
                        </div>


                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">alergias</label> 
                              <input type="text" name="alergias" value ="{{$paciente->alergias}}" class="form-control" disabled>
                            
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Contacto De Emergencia</label> <b>*</b>
                              <input type="number" name="contacto_emergencia" value ="{{$paciente->contacto_emergencia}}" class="form-control" disabled>
                             
                          </div>
                        </div>


                        <div class="col-md-9">
                          <div class="form group">
                              <label for="">observaciones</label> <b>*</b>
                              <input type="text" name="observaciones" value ="{{$paciente->observaciones}}" class="form-control" disabled>
                            
                          </div>
                        </div>


                        



                      </div> <!-- aqui termina el div para contenido este por partes en el row--> 

                    

                      
                  
                      
                    

                      <br>
                      <hr>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form group">
                            <a href="{{url('admin/pacientes')}}" class="btn btn-secondary">cancelar</a>
                             
                          </div>
                        </div>
                      </div>

                    </div>

            
                 
        
              <!-- /.card-body -->
            </div>

            <!-- /.card -->
          </div>
        

    </div>
@endsection