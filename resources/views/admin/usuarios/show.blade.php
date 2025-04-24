@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Usuario:  {{$usuario->name}}</h1>
    </div>
    
    <div class="row">
    <div class="col-md-10">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">Datos Registrados</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
               
              <div class="card-body" >

                

                <div class="row">
                    <div class="col-md-12">
                      <div class="form group">
                          <label for="">Nombre del usuario</label> <b>*</b>
                          <p>{{$usuario->name}}</p>
                      </div>
                    </div>
                  </div>
                
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form group">
                          <label for="">Email</label> <b>*</b>
                          <p>{{$usuario->email}}</p>
                      </div>
                    </div>
                  </div>

                
                
                  <br>
                  <hr>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form group">
                        <a href="{{url('admin/usuarios')}}" class="btn btn-secondary">cancelar</a>
                         
                      </div>
                    </div>
                  </div>
              </div>

                
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    
    </div>
@endsection