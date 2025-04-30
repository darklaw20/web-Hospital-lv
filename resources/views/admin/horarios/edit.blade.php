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

              <form action="{{url('/admin/horarios/create')}}" method="POST">
              @csrf
                  <div class="row">
                        <div class="col-md-4">
                          <div class="form group">
                              <label for="">Dia </label> <b>*</b>
                              <select name="dia" id="" class="form-control">
                                <option value="LUNES">LUNES</option>
                                <option value="MARTES">MARTES</option>
                                <option value="MIERCOLES">MIERCOLES</option>
                                <option value="JUEVES">JUEVES</option>
                                <option value="VIERNES">VIERNES</option>
                                <option value="SABADO">SABADO</option>
                                <option value="DOMINGO">DOMINGO</option>
                            
                              </select>
                             
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form group">
                              <label for="">hora inicio </label> <b>*</b>
                              <input type="time" name="hora_inicio" value ="{{$horarios->hora_inicio}}" class="form-control" required>
                              @error('hora_inicio')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form group">
                              <label for="">hora fin </label> <b>*</b>
                              <input type="time" name="hora_fin" value ="{{$horarios->hora_inicio}}" class="form-control" required>
                              @error('hora_fin')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>


                        

                        

                        <div class="col-md-4">
                          <div class="form group">
                              <label for="">Medico</label> 
                              <select name="doctor_id" class="form-control" id="">
                                  @foreach($medicos as $medico )
                                  <option value="{{$medico->id}}">{{$medico->nombre. " " . $medico->apellidos. " " . $medico->especialidad}}</option>
                                  @endforeach
                              </select>
                          </div>
                        </div>


                        <div class="col-md-4">
                          <div class="form group">
                              <label for="">Consultorio</label> 
                              <select name="consultorio_id" class="form-control" id="">
                              @foreach($consultorios as $consultorio )
                                  <option value="{{$consultorio->id}}">{{$consultorio->nombre. " | " . $consultorio->ubicacion}}</option>
                                  @endforeach
                                 
                              </select>
                          </div>
                        </div>





                        



                      </div> <!-- aqui termina el div para contenido este por partes en el row--> 

                    

                      
                  
                      
                    

                      <br>
                      <hr>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form group">
                            <a href="{{url('admin/horarios')}}" class="btn btn-secondary">cancelar</a>
                              <button type="submit" class="btn btn-primary">Registrar Horario</button>
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