@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Agendar Horarios</h1>
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
               
              <div class="card-body row" >
            <div class="col-md-3">
               <form action="{{url('/admin/horarios/create')}}" method="POST">
              @csrf
                  <div class="row">
                        <div class="col-md-12">
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
      
                        <div class="col-md-12">
                          <div class="form group">
                              <label for="">hora inicio </label> <b>*</b>
                              <input type="time" name="hora_inicio" value ="{{old('hora_inicio')}}" class="form-control" required>
                              @error('hora_inicio')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form group">
                              <label for="">hora fin </label> <b>*</b>
                              <input type="time" name="hora_fin" value ="{{old('hora_fin')}}" class="form-control" required>
                              @error('hora_fin')
                            <small style="color:red">{{$message}}</small>
                              @enderror
                          </div>
                        </div>


                        

                        

                        <div class="col-md-12">
                          <div class="form group">
                              <label for="">Medico</label> 
                              <select name="doctor_id" class="form-control" id="">
                                  @foreach($medicos as $medico )
                                  <option value="{{$medico->id}}">{{$medico->nombre. " " . $medico->apellidos. " " . $medico->especialidad}}</option>
                                  @endforeach
                              </select>
                          </div>
                        </div>


                        <div class="col-md-12">
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
               <div class="col-md-9">
              
          <div class="col-md-12">
    
       
     
        <div class="card-body">

        <table class="table table-striped table-hover table-sm table-bordered">
            <thead>
                <tr>
                    <th>Hora</th>
                    <th>LUNES</th>
                    <th>MARTES</th>
                    <th>MIERCOLES</th>
                    <th>JUEVES</th>
                    <th>VIERNES</th>
                    <th>SABADO</th>
                    <th>DOMINGO</th>
                   

                </tr>

            </thead>
            <tbody>
            @php
    $horas = [
        '08:00:00 - 09:00:00','09:00:00 - 10:00:00','10:00:00 - 11:00:00',
        '11:00:00 - 12:00:00','12:00:00 - 13:00:00','13:00:00 - 14:00:00',
        '14:00:00 - 15:00:00','15:00:00 - 16:00:00','16:00:00 - 17:00:00',
        '17:00:00 - 18:00:00','18:00:00 - 19:00:00','19:00:00 - 20:00:00',
        '20:00:00 - 21:00:00','21:00:00 - 22:00:00','22:00:00 - 23:00:00'
    ];

    $diasSemana = ['LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO'];
@endphp

@foreach($horas as $hora)
    @php
        list($hora_inicio, $hora_fin) = explode(' - ', $hora);
        $hora_inicio_ts = strtotime($hora_inicio);
        $hora_fin_ts = strtotime($hora_fin);
    @endphp

    <tr>
        <td>{{ $hora }}</td>
        @foreach($diasSemana as $dia)
            @php
                $nombre_doctor = '';

                foreach ($horarios as $horario) {
                    $dia_horario = strtoupper($horario->dia);
                    $horario_inicio_ts = strtotime($horario->hora_inicio);
                    $horario_fin_ts = strtotime($horario->hora_fin);

                    if ($dia_horario == $dia &&
                            $hora_inicio_ts < $horario_fin_ts &&
                                        $hora_fin_ts > $horario_inicio_ts)
                            {

                        $nombre_doctor = $horario->medico->nombre . ' ' . $horario->medico->apellidos;
                        break;
                    }
                }
            @endphp
            <td>{{ $nombre_doctor }}</td>
        @endforeach
    </tr>
@endforeach

            </tbody>
        </table>
        </div>


       

   
</div>
            </div>
            </div><!-- div del formulario-->
             
            
            </div><!-- card body -->
</form>
            <!-- /.card -->
          </div>
        

    </div>
@endsection