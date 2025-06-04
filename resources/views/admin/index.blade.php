@extends('layouts.admin')
@section('content')
<br>
  <div class="container">
   
    <h1>Panel Principal</h1>
  <hr>
  </div>

  <div class="row">
  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$total_usuarios}}</h3>

                <p>usuarios</p>
              </div>
              <div class="icon">
              <i class="ion fas bi bi-person-badge"></i>
              </div>
              <a href="{{url('admin/usuarios')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{$total_secretarias}}</h3>

                <p>secretarias</p>
              </div>
              <div class="icon">
              <i class="ion fas bi bi-clipboard2-pulse"></i>
              </div>
              <a href="{{url('admin/secretarias')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$total_pacientes}}</h3>

                <p>pacientes</p>
              </div>
              <div class="icon">
              <i class="ion fas bi bi-person-heart"></i>
              </div>
              <a href="{{url('admin/pacientes')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{$total_consultorios}}</h3>

                <p>consultorios</p>
              </div>
              <div class="icon">
              <i class="ion fas bi bi-buildings"></i>
              </div>
              <a href="{{url('admin/pacientes')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$total_medicos}}</h3>

                <p>medicos</p>
              </div>
              <div class="icon">
              <i class="ion fasbi bi-h-circle"></i>
              </div>
              <a href="{{url('admin/medicos')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$total_horarios}}</h3>

                <p>horarios</p>
              </div>
              <div class="icon">
              <i class="ion fasbi bi-clock-history"></i>
              </div>
              <a href="{{url('admin/horarios')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
  </div>
@endsection