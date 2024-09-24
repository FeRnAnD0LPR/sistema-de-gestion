@extends('layouts.admin')

@section('content')




    <div class="content" style="margin-left: 20px">
        <h1>Lista de Docentes</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                <ol class="breadcrumb float-sm-right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                <i class="bi bi-folder-fill"></i>Registrar Postulante
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('docentes')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Apellidos Nombres</label>
                                            <input type="text" name="apellido_nombre" value="{{old('apellido_nombre')}}" class="form-control" placeholder="Ap.Paterno Ap.materno Nombre(s)" required>
                                            @error('apellido_nombre')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">CI</label>
                                            <input type="text" name="ci" value="{{old('ci')}}" class="form-control" required>
                                            @error('ci')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Edad</label>
                                            <input type="number" name="edad" value="{{old('edad')}}" class="form-control" onkeypress="return event.charCode >= 48" min="1" placeholder="mayor o igual a 20" required>
                                            @error('edad')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Dirección</label>
                                            <input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Ej. Av. Civica 901" required>
                                            @error('direccion')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Teléfono</label>
                                            <input type="number" name="telefono" value="{{old('telefono')}}" class="form-control" onkeypress="return event.charCode >= 48" min="60000000" placeholder="+591 76543210" required>
                                            @error('telefono')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Crear</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </ol>
                    
                    <div class="card-body" style="display: block;">

                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><center>Nro</center></th>
                                    <th><center>apellido nombre</center></th>
                                    <th><center>ci</center></th>
                                    <th><center>teléfono</center></th>
                                    <th><center>acción</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $contador = 0; @endphp

                        @foreach($docentes as $docente)
                            @php 
                                $contador = $contador + 1;
                                $id = $docente->id;
                            @endphp
                            <tr>
                                <td style="text-align: center">{{$contador}}</td>
                                    <td>{{$docente->apellido_nombre}}</td>
                                    <td>{{$docente->ci}}</td>
                                    <td>{{$docente->telefono}}</td>
                                    <td style="text-align:center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{route('docentes.show',$docente->id)}}" type="button" class="btn btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{route('docentes.edit',$docente->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                        <form action="{{route('docentes.destroy',$docente->id)}}" onclick="preguntar<?=$id;?>(event)" 
                                              method="post" id="miFormulario<?=$id;?>">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" style="border-radius: 0px 4px 4px 0px"><i class="bi bi-trash"></i></button>
                                        </form>
                                        <script>
                                            function preguntar<?=$id;?>(event){
                                                event.preventDefault();
                                                Swal.fire({
                                                    title: 'Eliminar registro',
                                                    text: 'Desea Eliminar al Docente?',
                                                    icon: 'question',
                                                    showDenyButton: true,
                                                    confirmButtonText: 'Eliminar',
                                                    confirmButtonColor: '#a5161d',
                                                    denyButtonColor: '#270a0a',
                                                    denyButtonText: 'Cancelar',
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        var form = $('#miFormulario<?=$id;?>');
                                                        form.submit();
                                                    }
                                                });
                                            }
                                        </script>
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
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Docentes",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Docentes",
                                    "infoFiltered": "(Filtrado de _MAX_ total Docentes)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Docentes",
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

                </div>

            </div>
        </div>

    </div>

@endsection
