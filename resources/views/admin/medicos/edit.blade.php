@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Datos de : |{{$medicos->nombre}}|</h1>
    </div>
    
    <div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-success">
              <div class="card-header">
                <h3 class="card-title">Actualice los Datos del Medico</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
               
              <div class="card-body" >

              <form action="{{url('/admin/medicos',$medicos->id)}}" method="POST">
              @csrf
              @method('PUT')
                  <div class="row">
                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Nombre </label> <b>*</b>
                              <input type="text" name="nombre" value ="{{$medicos->nombre}}}" class="form-control" required>
                              @error('nombre')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Apellidos </label> <b>*</b>
                              <input type="text" name="apellidos" value ="{{$medicos->apellidos}}" class="form-control" required>
                              @error('apellidos')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                      
                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Telefono </label> <b>*</b>
                              <input type="number" name="telefono" value ="{{$medicos->telefono}}" class="form-control" >
                            
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Licencia Medica </label> <b>*</b>
                              <input type="text" name="licencia_medica" value ="{{$medicos->licencia_medica}}" class="form-control" required>
                              @error('licencia_medica')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>



                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Especialidad</label> <b>*</b>
                              <input type="text" name="especialidad" value ="{{$medicos->especialidad}}" class="form-control" required>
                              @error('especilaidad')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                     
                    <div class="col-md-3">
                      <div class="form group">
                          <label for="">Email</label> <b>*</b>
                          <input type="email" name="email" value ="{{$medicos->user->email}}" class="form-control" required>
                          @error('email')
                        <small style="color:red">{{$message}}</small>
                          @enderror
                      </div>
                    </div>
                  

                  
                    <div class="col-md-3">
                      <div class="form group">
                          <label for="">Password</label> <b>*</b>
                          <input type="password" name="password"  class="form-control" >
                          @error('password')
                        <small style="color:red">{{$message}}</small>
                          @enderror
                      </div>
                    </div>
                 
                  
                    <div class="col-md-3">
                      <div class="form group">
                          <label for="">Password verificacion</label> <b>*</b>
                          <input type="password"  name="password_confirmation" class="form-control" >
                      </div>
                    </div>
                  
                  

                        



                      </div> <!-- aqui termina el div para contenido este por partes en el row--> 

                    

                      
                  
                      
                    

                      <br>
                      <hr>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form group">
                            <a href="{{url('admin/medicos')}}" class="btn btn-secondary">cancelar</a>
                              <button type="submit" class="btn btn-success">Registrar Consultorio</button>
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