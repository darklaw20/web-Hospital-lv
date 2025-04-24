@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Borrado de datos del Consultorio</h1>
    </div>
    
    <div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Esta seguro de borrar el consultorio?</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
               
              <div class="card-body" >

              <form action="{{url('/admin/consultorios',$consultorio->id)}}" method="POST">
              @csrf
              @method('DELETE')
                  <div class="row">
                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Nombre </label> <b>*</b>
                              <input type="text" name="nombre" value ="{{$consultorio->nombre}}" class="form-control" disabled>
                              @error('nombre')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Ubicacion </label> <b>*</b>
                              <input type="text" name="ubicacion" value ="{{$consultorio->ubicacion}}" class="form-control" disabled>
                              @error('ubicacion')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Capacidad </label> <b>*</b>
                              <input type="text" name="capacidad" value ="{{$consultorio->capacidad}}" class="form-control" disabled>
                              @error('capacidad')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Telefono </label> <b>*</b>  
                              <input type="number" name="telefono" value ="{{$consultorio->telefono}}" class="form-control" disabled >
                            
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form group">
                              <label for="">Especialidad</label> <b>*</b>
                              <input type="text" name="especialidad" value ="{{$consultorio->especialidad}}" class="form-control" disabled>
                              @error('especilaidad')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="form group">
                              <label for="">Estado</label> 
                              <input type="text" name="estado" class="form-control" value="{{$consultorio->estado}}" disabled>
                             
                          </div>
                        </div>



                        



                      </div> <!-- aqui termina el div para contenido este por partes en el row--> 

                    

                      
                  
                      
                    

                      <br>
                      <hr>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form group">
                            <a href="{{url('admin/consultorios')}}" class="btn btn-secondary">cancelar</a>
                              <button type="submit" class="btn btn-danger">Eliminar  Consultorio</button>
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