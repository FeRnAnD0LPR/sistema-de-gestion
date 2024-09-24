@extends('layouts.admin')

@section('content')

    <div class="content" style="margin-left: 20px">
        <h1>Lista de Calificaciones de Postulaciones a Docencia</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                <ol class="breadcrumb float-sm-right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                <i class="bi bi-folder-fill"></i>Registrar Calificaciones
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Nota</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <!-- Botón para abrir el segundo modal -->
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalLabel">
                                  nota 1
                                </button>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalLabel2">
                                  nota 2
                                </button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLabel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('notas')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Postulante</label>
                                            <input type="text" name="postulante" value="{{old('postulante')}}" class="form-control" required>
                                            @error('postulante')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Titulo Academico de Mayor Grado</label>
                                            <input type="number" name="nota1" value="{{old('nota1')}}" class="form-control" required min="0" max="40">
                                            @error('nota1')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Títulos y Cursos de Especialización</label>
                                            <input type="number" name="nota2" value="{{old('nota2')}}" class="form-control" required min="0" max="16">
                                            @error('nota2')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Cursos Relacionados a la Profesión</label>
                                            <input type="number" name="nota3" value="{{old('nota3')}}" class="form-control" required min="0" max="10">
                                            @error('nota3')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Asistencia a Congresos</label>
                                            <input type="number" name="nota4" value="{{old('nota4')}}" class="form-control" required min="0" max="10">
                                            @error('nota4')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Experiencia Doncente Universitaria</label>
                                            <input type="number" name="nota5" value="{{old('nota5')}}" class="form-control" required min="0" max="10">
                                            @error('nota5')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Investigación y Producción Intelectual</label>
                                            <input type="number" name="nota6" value="{{old('nota6')}}" class="form-control" required min="0" max="10">
                                            @error('nota6')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Reconocimientos</label>
                                            <input type="number" name="nota7" value="{{old('nota7')}}" class="form-control" required min="0" max="4">
                                            @error('nota7')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="exampleModalLabel2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel2">Registro</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{url('notas')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Postulante</label>
                                            <input type="text" name="postulante" value="{{old('postulante')}}" class="form-control" placeholder="Ap.Paterno Ap.materno Nombre(s)" required>
                                            @error('postulante')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Dominio del Tema Presentado</label>
                                            <input type="number" name="tema" value="{{old('tema')}}" class="form-control" required min="0" max="40">
                                            @error('tema')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Interactuación Didáctica y Manejo de Aula</label>
                                            <input type="number" name="interaccion" value="{{old('interaccion')}}" class="form-control" required min="0" max="30">
                                            @error('interaccion')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label for="">Respuestas a Interrogantes</label>
                                            <input type="number" name="respuestas" value="{{old('respuestas')}}" class="form-control" required min="0" max="30">
                                            @error('respuestas')
                                            <small style="color: red">Este campo es requerido</small>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
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
                                    <th><center>Postulante</center></th>
                                    <th><center>Primera Calificación</center></th>
                                    <th><center>Segunda Calificación</center></th>
                                    <th><center>acción</center></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php $contador = 0; @endphp

                        @foreach($notas as $nota)
                            @php 
                                $contador = $contador + 1;
                                $id = $nota->id;
                            @endphp
                            <tr>
                                <td style="text-align: center">{{$contador}}</td>
                                    <td>{{$nota->postulante}}</td>
                                    <td>{{$nota->total1}}</td>
                                    <td>{{$nota->total2}}</td>
                                    <td style="text-align:center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{route('notas.show',$nota->id)}}" type="button" class="btn btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{route('notas.edit',$nota->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                        <form action="{{route('notas.destroy',$nota->id)}}" onclick="preguntar<?=$id;?>(event)" 
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
                                                    text: 'Desea Eliminar la Nota?',
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
                                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Notas",
                                    "infoEmpty": "Mostrando 0 a 0 de 0 Notas",
                                    "infoFiltered": "(Filtrado de _MAX_ total Notas)",
                                    "infoPostFix": "",
                                    "thousands": ",",
                                    "lengthMenu": "Mostrar _MENU_ Notas",
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
