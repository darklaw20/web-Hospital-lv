@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registro de Consultorio</h1>
    </div>
    
    <div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Llene los Datos del Consultorio</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
               
              <div class="card-body" >

              <form action="{{url('/admin/consultorios/create')}}" method="POST">
              @csrf
                  <div class="row">
                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Nombre </label> <b>*</b>
                              <input type="text" name="nombre" value ="{{old('nombre')}}" class="form-control" required>
                              @error('nombre')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Ubicacion </label> <b>*</b>
                              <input type="text" name="ubicacion" value ="{{old('ubicacion')}}" class="form-control" required>
                              @error('ubicacion')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Capacidad </label> <b>*</b>
                              <input type="text" name="capacidad" value ="{{old('capacidad')}}" class="form-control" required>
                              @error('capacidad')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Telefono </label> <b>*</b>
                              <input type="number" name="telefono" value ="{{old('telefono')}}" class="form-control" >
                            
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form group">
                              <label for="">Especialidad</label> <b>*</b>
                              <input type="text" name="especialidad" value ="{{old('especialidad')}}" class="form-control" required>
                              @error('especilaidad')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Estado</label> 
                              <select name="estado" class="form-control" id="">
                                  <option value="ACTIVO">ACTIVO</option>
                                  <option value="INACTIVO">INACTIVO</option>
                              </select>
                          </div>
                        </div>

                       


                        



                      </div> <!-- aqui termina el div para contenido este por partes en el row--> 

                    

                      
                  
                      
                    

                      <br>
                      <hr>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form group">
                            <a href="{{url('admin/consultorios')}}" class="btn btn-secondary">cancelar</a>
                              <button type="submit" class="btn btn-primary">Registrar Consultorio</button>
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