@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Borrar secretaria {{$secretaria->nombres}} {{$secretaria->apellidos}}</h1>
    </div>
    
    <div class="row">
    <div class="col-md-12">
            <div class="card  card-danger">
              <div class="card-header">
                <h3 class="card-title">Estas Seguro de eliminar el registro</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
               
              <div class="card-body" >

                <form action="{{url('/admin/secretarias',$secretaria->id)}}" method="POST">
                  @csrf
                    @method('DELETE')
                <div class="row">
                    <div class="col-md-3">
                      <div class="form group">
                          <label for="">Nombre</label> 
                          <input type="text" name="nombres" value ="{{$secretaria->nombres}}" class="form-control" disabled>
                          @error('nombres')
                        <small style="color:red">{{$message}}</small>
                          @enderror
                      </div>
                    </div>
                    
                    <div class="col-md-3">
                            <div class="form group">
                                <label for="">Apellidos</label> <b>*</b>
                                <input type="text" name="apellidos" value ="{{$secretaria->apellidos}}" class="form-control" disabled>
                                @error('apellidos')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            </div>
                    

                        
                            <div class="col-md-3">
                            <div class="form group">
                                <label for="">curp</label> <b>*</b>
                                <input type="text" name="curp"  value ="{{$secretaria->curp}}" class="form-control" disabled>
                                @error('curp')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            </div>
                        
                        
                        
                            <div class="col-md-3">
                            <div class="form group">
                                <label for="">telefono</label> <b>*</b>
                                <input type="number" name="telefono" value ="{{$secretaria->telefono}}" class="form-control" disabled>
                                @error('curp')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            </div>
                        





                        
                            <div class="col-md-2">
                            <div class="form group">
                                <label for="">fecha de nacimiento</label> <b>*</b>
                                <input type="date" name="fecha_nacimiento" value ="{{$secretaria->fecha_nacimiento}}" class="form-control" disabled>
                                @error('fecha_nacimiento')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            </div>
                        

                        <hr>

                        
                            <div class="col-md-10">
                            <div class="form group">
                                <label for="">direccion</label> <b>*</b>
                                <input type="text" name="direccion" value ="{{$secretaria->direccion}}" class="form-control" disabled>
                                @error('direccion')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            </div>

                            
                    

                            
                    <div class="col-md-4">
                      <div class="form group">
                          <label for="">Email</label> <b>*</b>
                          <input type="email" name="email" value ="{{$secretaria->user->email}}" class="form-control" disabled>
                          @error('email')
                        <small style="color:red">{{$message}}</small>
                          @enderror
                      </div>
                    </div>
                  

                  
                  
                 
                    
                 </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form group">
                        <a href="{{url('admin/secretarias')}}" class="btn btn-secondary">cancelar</a>
                          <button type="submit" class="btn btn-danger">eliminar registro</button>
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