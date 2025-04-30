@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Muestra de Horarios</h1>
    </div>
    
    <div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">DATOS DEL HORARIO </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
               
              <div class="card-body" >

              <form  >

              

             
                  <div class="row">
                        <div class="col-md-4">
                          <div class="form group">
                              <label for="">Dia </label> <b>*</b>
                              
                             <p>{{$horario->dia}}</p>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form group">
                              <label for="">hora inicio </label> <b>*</b>
                              <input type="time" name="hora_inicio" value ="{{$horario->hora_inicio}}" class="form-control" disabled>
                              @error('hora_inicio')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form group">
                              <label for="">hora fin </label> <b>*</b>
                              <input type="time" name="hora_fin" value ="{{$horario->hora_fin}}" class="form-control" disabled>
                              @error('hora_fin')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>


                        

                        

                        <div class="col-md-4">
                          <div class="form group">
                              <label for="">Medico</label> 
                              <p>{{$horario->medico->nombre. " " . $horario->medico->apellidos. " | " . $horario->medico->especialidad}} </p>
                          </div>
                        </div>


                        <div class="col-md-4">
                          <div class="form group">
                              <label for="">Consultorio</label> 
                              <p>{{$horario->consultorio->nombre. " | " . $horario->consultorio->ubicacion}}</p>
                          </div>
                        </div>



                     


                        



                      </div> <!-- aqui termina el div para contenido este por partes en el row--> 

                    

                      
                  
                   
                      
                    

                      <br>
                      <hr>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form group">
                            <a href="{{url('admin/horarios')}}" class="btn btn-secondary">cancelar</a>
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