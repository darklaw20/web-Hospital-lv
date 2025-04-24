@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>Usuarios : {{$secretaria->nombres}}  {{$secretaria->apellidos}}</h1>
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

                
               

                <div class="row">
                    <div class="col-md-3">
                      <div class="form group">
                          <label for="">Nombre</label> <b>*</b>
                          <p>{{$secretaria->nombres}}</p>
                      </div>
                    </div>
                    
                    <div class="col-md-3">
                            <div class="form group">
                                <label for="">Apellidos</label> <b>*</b>
                                <p>{{$secretaria->apellidos}}</p>
                            </div>
                            </div>
                    

                        
                            <div class="col-md-3">
                            <div class="form group">
                                <label for="">curp</label> <b>*</b>
                                <p>{{$secretaria->curp}}</p>
                            </div>
                            </div>
                        
                        
                        
                            <div class="col-md-3">
                            <div class="form group">
                                <label for="">telefono</label> <b>*</b>
                                <p>{{$secretaria->telefono}}</p>
                            </div>
                            </div>
                        





                        
                            <div class="col-md-2">
                            <div class="form group">
                                <label for="">fecha de nacimiento</label> <b>*</b>
                                <p>{{$secretaria->fecha_nacimiento}}</p>
                            </div>
                            </div>
                        

                        <hr>

                        
                            <div class="col-md-10">
                            <div class="form group">
                                <label for="">direccion</label> <b>*</b>
                                <p>{{$secretaria->direccion}}</p>
                            </div>
                            </div>

                            
                    

                            
                    <div class="col-md-4">
                      <div class="form group">
                          <label for="">Email</label> <b>*</b>
                          <p>{{$secretaria->user->email}}</p>
                      </div>
                    </div>
                  

                  
                
                 
                  
                 
                   
                 </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form group">
                        <a href="{{url('admin/secretarias')}}" class="btn btn-secondary">cancelar</a>
                       
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