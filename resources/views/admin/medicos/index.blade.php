@extends('layouts.admin')
@section('content')
<br>
  <div class="container">
   
    <h1>Listado de Medicos</h1>
   </div>
<hr>
  <div class="row">

  <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title"> Medicos Registrados</h3>

                <div class="card-tools">
                  <a href="{{url('admin/medicos/create')}}" class="btn btn-primary">
                    Registrar Nuevo
</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            
              <table id="example1" class="table table-striped table-bordered table-hover table-sm">
        <thead class="bg-primary">
          <tr style="text-align : center">  
                <td >#</td>
                <td >Nombre</td>
                <td>apellidos</td>
                <td>licencia</td>
               <td>correo</td>
                
                <td>Acciones</td>
          </tr>
        </thead>
            <tbody>
              <?php  $contador = 1; ?>
                  @foreach($medicos as $medico)

              <tr>
                  <td>{{$contador++}}</td>
                  <td> {{$medico->nombre}}</td>
                  <td> {{$medico->apellidos}}</td>
                    
                  <td>{{$medico->licencia_medica}}</td>
                  <td>{{$medico->user->email}}</td>
                

                  <td style="text-align: center;">
                  <div class="btn-group " role="group" aria-label="Basic example">
  <a href="{{url('admin/medicos/'.$medico->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-person-plus-fill"></i></a>
  <a href="{{url('admin/medicos/'.$medico->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pen"></i></a>
  <a href="{{url('admin/medicos/'.$medico->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></a>
</div>
                  </td>
              </tr>
                  @endforeach

        </tbody>
    </table>
    <script>
                        $(function () {
                            $("#example1").DataTable({
                                "pageLength": 10,
                                "language": {
                                    "emptyTable": "No hay información",
                                    "info": "Mostrando START a END de TOTAL medicos",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 medicos",
                                    "infoFiltered": "(Filtrado de MAX total medicos)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar MENU medicos",
                                    "loadingRecords": "Cargando...",
                                    "processing": "Procesando...",
                                    "search": "Buscador:",
                                    "zeroRecords": "Sin resultados encontrados",
                                    "paginate": {
                                        "first": "Primero",
                                        "last": "Ultimo",
                                        "next": "Siguiente",
                                        "previous": "Anterior"
                                    }
                                },
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    },{
                                        extend: 'csv'
                                    },{
                                        extend: 'excel'
                                    },{
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }
                                    ]
                                },
                                    {
                                        extend: 'colvis',
                                        text: 'Visor de columnas',
                                        collectionLayout: 'fixed three-column'
                                    }
                                ],
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        });
                    </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
    
   
    
   </div>


@endsection