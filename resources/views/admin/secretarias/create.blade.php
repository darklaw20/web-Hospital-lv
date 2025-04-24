@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registro de una nueva Secretaria</h1>
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

                <form action="{{url('/admin/secretarias/create')}}" method="POST">
                  @csrf

                <div class="row">
                    <div class="col-md-3">
                      <div class="form group">
                          <label for="">Nombre</label> <b>*</b>
                          <input type="text" name="nombres" value ="{{old('nombres')}}" class="form-control" required>
                          @error('nombres')
                        <small style="color:red">{{$message}}</small>
                          @enderror
                      </div>
                    </div>
                    
                    <div class="col-md-3">
                            <div class="form group">
                                <label for="">Apellidos</label> <b>*</b>
                                <input type="text" name="apellidos" value ="{{old('apellidos')}}" class="form-control" required>
                                @error('apellidos')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            </div>
                    

                        
                            <div class="col-md-3">
                            <div class="form group">
                                <label for="">curp</label> <b>*</b>
                                <input type="text" name="curp"  value ="{{old('curp')}}" class="form-control" required>
                                @error('curp')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            </div>
                        
                        
                        
                            <div class="col-md-3">
                            <div class="form group">
                                <label for="">telefono</label> <b>*</b>
                                <input type="number" name="telefono" value ="{{old('telefono')}}" class="form-control" required>
                                @error('curp')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            </div>
                        





                        
                            <div class="col-md-2">
                            <div class="form group">
                                <label for="">fecha de nacimiento</label> <b>*</b>
                                <input type="date" name="fecha_nacimiento" value ="{{old('fecha_nacimiento')}}" class="form-control" required>
                                @error('fecha_nacimiento')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            </div>
                        

                        <hr>

                        
                            <div class="col-md-10">
                            <div class="form group">
                                <label for="">direccion</label> <b>*</b>
                                <input type="text" name="direccion" value ="{{old('direccion')}}" class="form-control" required>
                                @error('direccion')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            </div>

                            
                    

                            
                    <div class="col-md-4">
                      <div class="form group">
                          <label for="">Email</label> <b>*</b>
                          <input type="email" name="email" value ="{{old('email')}}" class="form-control" required>
                          @error('email')
                        <small style="color:red">{{$message}}</small>
                          @enderror
                      </div>
                    </div>
                  

                  
                    <div class="col-md-4">
                      <div class="form group">
                          <label for="">Password</label> <b>*</b>
                          <input type="password" name="password"  class="form-control" required>
                          @error('password')
                        <small style="color:red">{{$message}}</small>
                          @enderror
                      </div>
                    </div>
                 
                  
                 
                    <div class="col-md-4">
                      <div class="form group">
                          <label for="">Password verificacion</label> <b>*</b>
                          <input type="password"  name="password_confirmation" class="form-control" required>
                      </div>
                    </div>
                 </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form group">
                        <a href="{{url('admin/secretarias')}}" class="btn btn-secondary">cancelar</a>
                          <button type="submit" class="btn btn-primary">Registrar usuarios</button>
                      </div>
                    </div>
                  </div>
              </div>

                </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    
    </div>
@endsection