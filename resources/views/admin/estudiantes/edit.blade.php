@extends('layouts.admin')

@section('content')

    <div class="content" style="margin-left: 20px">
        <h1>Editar Datos</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card.success">
                    <div class="card-header">
                        <h3 class="card-title"><b>Editar</b></h3>
                    </div>
                    <div class="card-body" style="display: block;">
                        <form action="{{url('estudiantes', $estudiante->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-3">
                                    <div class="form-group">
                                    <label for="">Apellidos Nombres</label>
                                    <input type="text" name="apellido_nombre" value="{{$estudiante->apellido_nombre}}" class="form-control" required>
                                    @error('apellido_nombre')
                                    <small style="color: red">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">CI</label>
                                    <input type="text" name="ci" value="{{$estudiante->ci}}" class="form-control" required>
                                    @error('ci')
                                    <small style="color: red">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Edad</label>
                                    <input type="number" name="edad" value="{{$estudiante->edad}}" class="form-control" required>
                                    @error('edad')
                                    <small style="color: red">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Dirección</label>
                                    <input type="text" name="direccion" value="{{$estudiante->direccion}}" class="form-control" required>
                                    @error('direccion')
                                    <small style="color: red">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Teléfono</label>
                                    <input type="number" name="telefono" value="{{$estudiante->telefono}}" class="form-control" required>
                                    @error('telefono')
                                    <small style="color: red">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <a href="{{url('estudiantes')}}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Actualizar</button>

                                </div>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection