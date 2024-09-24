@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Editar Usuario</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card.success">
                <div class="card-header">
                    <h3 class="card-title">Editar El Usuario</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('usuarios',$usuario->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre usuario</label>
                                    <input type="text"  name="name" value="{{$usuario->name}}" class="form-control" required>
                                    @error('name')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email"  name="email" value="{{$usuario->email}}" class="form-control" required>
                                    @error('email')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Profesión</label>
                                    <select name="profesión" value="{{old('profesión')}}" class="form-control" id="" required>
                                        @if($usuario->profesión == 'Docente')
                                            <option value="Docente">Docente</option>
                                            <option value="Estudiante">Estudiante</option>
                                        @else
                                            <option value="Estudiante">Estudiante</option>
                                            <option value="Docente">Docente</option>
                                        @endif
                                    </select>
                                    @error('profesión')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">CI</label>
                                    <input type="text"  name="ci" value="{{$usuario->ci}}" class="form-control" required>
                                    @error('ci')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" value="{{old('password')}}" name="password" class="form-control">
                                    @error('password')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Repetir Password</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <a href="{{url('usuarios')}}" class="btn btn-primary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                            </div>
                        </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
@endsection
