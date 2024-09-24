@extends('layouts.admin')

@section('content')

    <div class="content" style="margin: 20px">
        <h1>ARQUITECTURA</h1>
    
    <hr>
    <div class="row">
        <div class="col-lg-3 col-6">

            <div class="small-box bg-warning">
                <div class="inner">
                    @php $contador_de_usuarios=0; @endphp
                    @foreach($usuarios as $usuario)
                        @php $contador_de_usuarios++; @endphp
                    @endforeach
                    <h3>{{$contador_de_usuarios}}</h3>
                    <p>Usuarios registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="{{url('/usuarios')}}" class="small-box-footer">
                    Información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    
        <div class="col-lg-3 col-6">

            <div class="small-box bg-primary">
                <div class="inner">
                    @php $contador_de_docentes=0; @endphp
                    @foreach($docentes as $docente)
                        @php $contador_de_docentes++; @endphp
                    @endforeach
                    <h3>{{$contador_de_docentes}}</h3>
                    <p>Docentes registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="{{url('/docentes')}}" class="small-box-footer">
                    Información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>

        </div>

        <div class="col-lg-3 col-6">

            <div class="small-box bg-danger">
                <div class="inner">
                    @php $contador_de_estudiantes=0; @endphp
                    @foreach($estudiantes as $estudiante)
                        @php $contador_de_estudiantes++; @endphp
                    @endforeach
                    <h3>{{$contador_de_estudiantes}}</h3>
                    <p>Estudiantes registrados</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="{{url('/estudiantes')}}" class="small-box-footer">
                    Información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>

        </div>

        

    </div>
    </div>
@endsection