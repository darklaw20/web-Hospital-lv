@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Registro de Nuevo Usuario</h1>
    </div>
    
    <div class="row">
    <div class="col-md-10">
            <div class="card card-outline card-success">
              <div class="card-header">
                <h3 class="card-title">Modificar usuario {{$usuario->name}}</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
               
              <div class="card-body" >

                <form action="{{url('admin/usuarios',$usuario->id)}}" method="POST">
                  @csrf
                  @method('PUT')

                <div class="row">
                    <div class="col-md-12">
                      <div class="form group">
                          <label for="">Nombre del usuario</label> <b>*</b>
                          <input type="text" name="name" value ="{{$usuario->name}}" class="form-control" required>
                          @error('name')
                        <small style="color:red">{{$message}}</small>
                          @enderror
                      </div>
                    </div>
                  </div>
                
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form group">
                          <label for="">Email</label> <b>*</b>
                          <input type="email" name="email" value ="{{$usuario->email}}" class="form-control" required>
                          @error('email')
                        <small style="color:red">{{$message}}</small>
                          @enderror
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form group">
                          <label for="">Password</label> <b>*</b>
                          <input type="password" name="password"  class="form-control" >
                          @error('password')
                        <small style="color:red">{{$message}}</small>
                          @enderror
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form group">
                          <label for="">Password verificacion</label> <b>*</b>
                          <input type="password"  name="password_confirmation" class="form-control" >
                      </div>
                    </div>
                  </div>
                  <br>
                  <hr>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form group">
                        <a href="{{url('admin/usuarios')}}" class="btn btn-secondary">cancelar</a>
                          <button type="submit" class="btn btn-success">Actualizar usuarios</button>
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