@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Nuevo usuario</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card.primary">
                <div class="card-header">
                    <h3 class="card-title">Nuevo usuario</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('usuarios')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre Completo</label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Ej. Ap.Paterno Ap.materno Nombre(s)" required>
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
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control" pattern=".+@gmail.com" size="30" placeholder="Ej. Juan@gmail.com" required>
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
                                    <input type="text" name="profesión" value="{{old('profesión')}}" class="form-control" required>
                                    <select name="profesión" value="{{old('profesión')}}" class="form-control" id="" required>
                                        <option value="Docente">Arquitecto</option>
                                        <option value="Estudiante">Estudiante</option>
                                    </select>
                                    <!-- <input type="text" value="{{old('profesión')}}" name="profesión" class="form-control" required> -->
                                    @error('profesión')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">CI </label>
                                    <input type="text" name="ci" value="{{old('ci')}}" class="form-control" placeholder="12345678" required>
                                    <!-- <select name="CI" value="{{old('ci')}}" class="form-control" id="" placeholder="12345678" required>
                                        <option value="Docente">11111</option>
                                        <option value="Estudiante">2222222</option>
                                    </select> -->
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
                                    <input type="password" name="password" value="{{old('password')}}" class="form-control" minlength="8" placeholder="********" required>
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
                                    <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" minlength="8" placeholder="********" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <a href="{{url('usuarios')}}" class="btn btn-primary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-floppy2"></i>Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
@endsection
