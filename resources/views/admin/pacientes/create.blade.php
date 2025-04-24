@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registro de Paciente</h1>
    </div>
    
    <div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Llene los Datos</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
               
              <div class="card-body" >

              <form action="{{url('/admin/pacientes/create')}}" method="POST">
              @csrf
                  <div class="row">
                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Nombres </label> <b>*</b>
                              <input type="text" name="nombres" value ="{{old('nombres')}}" class="form-control" required>
                              @error('name')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Apellidos </label> <b>*</b>
                              <input type="text" name="apellidos" value ="{{old('apellidos')}}" class="form-control" required>
                              @error('apellidos')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">CURP </label> <b>*</b>
                              <input type="text" name="curp" value ="{{old('curp')}}" class="form-control" required>
                              @error('curp')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Numero de Seguro </label> <b>*</b>
                              <input type="text" name="numero_seguro" value ="{{old('numero_seguro')}}" class="form-control" required>
                              @error('numero_seguro')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Fecha de nacimiento</label> <b>*</b>
                              <input type="date" name="fecha_nacimiento" value ="{{old('fecha_nacimiento')}}" class="form-control" required>
                              @error('numero_seguro')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Genero</label> 
                              <select name="genero" class="form-control" id="">
                                  <option value="M">masculino</option>
                                  <option value="F">femenino</option>
                              </select>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">celular</label> <b>*</b>
                              <input type="number" name="celular" value ="{{old('celular')}}" class="form-control" required>
                              @error('celular')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">correo</label> <b>*</b>
                              <input type="email" name="correo" value ="{{old('correo')}}" class="form-control" required>
                              @error('correo')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form group">
                              <label for="">direccion</label> <b>*</b>
                              <input type="address" name="direccion" value ="{{old('direccion')}}" class="form-control" required>
                              @error('direccion')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Grupo Sanguineo</label> 
                              <select name="grupo_sanguineo" class="form-control" id="">
                                  
                                  <option value="A+">A+</option>
                                  <option value="A-">A-</option>
                                  <option value="B+">B+</option>
                                  <option value="B-">B-</option>
                                  <option value="O+">O+</option>
                                  <option value="O-">O-</option>
                                  <option value="AB+">AB+</option>
                              </select>
                          </div>
                        </div>


                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">alergias</label> <b>*</b>
                              <input type="text" name="alergias" value ="{{old('alergias')}}" class="form-control" required>
                              @error('alergias')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Contacto De Emergencia</label> <b>*</b>
                              <input type="number" name="contacto_emergencia" value ="{{old('contacto_emergencia')}}" class="form-control" required>
                              @error('contacto_emergencia')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>


                        <div class="col-md-9">
                          <div class="form group">
                              <label for="">observaciones</label> <b>*</b>
                              <input type="text" name="observaciones" value ="{{old('observaciones')}}" class="form-control" >
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
                              <button type="submit" class="btn btn-primary">Registrar Paciente</button>
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