@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>DatosUsuario</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card.info">
                <div class="card-header">
                    <h3 class="card-title">Datos Resgistrados</h3>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre usuario</label>
                                    <p>{{$usuario->name}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <p>{{$usuario->email}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Profesión</label>
                                    <p>{{$usuario->profesión}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">CI</label>
                                    <p>{{$usuario->ci}}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                    <a href="{{url('usuarios')}}" class="btn btn-primary">Volver</a>                                 
                            </div>
                        </div>
                    
                </div>    
            </div>
        </div>
    </div>
@endsection