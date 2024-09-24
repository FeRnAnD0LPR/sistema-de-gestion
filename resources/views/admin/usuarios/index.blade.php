@extends('layouts.admin')

@section('content')

    <div class="content" style="margin-left: 20px">
        <h1>Usuarios</h1>
    </div>
    <br>
    <div class="row" style="margin-left: 20px">
        <div class="col-md-12">
            <div class="card card-outline card.primary">
                <div class="card-header">
                    <h3 class="card-title">Lista De Usuarios</h3>
                    <div class="card-tools">
                        <a href="{{url('/usuarios/create')}}" class="btn btn-primary"><i class="bi bi-person"></i>Nuevo usuario</a>
                    </div>
                </div>
                <div class="card-body" style="display: block;">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><center>Nro</center></th>
                                <th><center>Nombre Completo</center></th>
                                <th><center>Profesión</center></th>
                                <th><center>CI</center></th>
                                <th><center>Acciones</center></th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $contador = 0; @endphp

                        @foreach($usuarios as $usuario)
                            @php 
                                $contador = $contador + 1;
                                $id = $usuario->id;
                            @endphp
                            <tr>
                                <td style="text-align: center">{{$contador}}</td>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->profesión}}</td>
                                <td>{{$usuario->ci}}</td>
                                <td style="text-align:center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{route('usuarios.show',$usuario->id)}}" type="button" class="btn btn-info">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{route('usuarios.edit',$usuario->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                        <form action="{{route('usuarios.destroy',$usuario->id)}}" onclick="preguntar<?=$id;?>(event)" 
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
                                                    text: 'Desea eliminar al usuario?',
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
                                "responsive": true, "lengthChange": true, "autoWidth": false,
                                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                            $('#example2').DataTable({
                                "paging": true,
                                "lengthChange": false,
                                "searching": false,
                                "ordering": true,
                                "info": true,
                                "autoWidth": false,
                                "responsive": true,
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div>

    </div>

@endsection