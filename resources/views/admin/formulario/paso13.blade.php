@extends('layouts.admin')

@section('content')

<div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">ARCHIVOS DE ESTUDIANTES</h1>
        </div>
    </div>
    <hr>
    <h5>A)Carta de solicitud de postulante dirigida al Señor Decano de la Facultad de Artes,
        especificando la asignatura a la que postula.
    </h5>
    <hr>
    

<form action="{{ route('formulario.paso13') }}" method="POST">
    @csrf
    <label for="campo13">Campo 13</label>
    <input type="file" id="campo13" name="campo13">
    @error('campo13')
        <div>{{ $message }}</div>
    @enderror
    <button type="submit">Siguiente</button>
</form>

@endsection