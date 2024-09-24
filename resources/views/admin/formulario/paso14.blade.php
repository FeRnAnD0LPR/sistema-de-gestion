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
    

<form action="{{ route('formulario.paso14') }}" method="POST">
    @csrf
    <label for="campo14">Campo 14</label>
    <input type="file" id="campo14" name="campo14">
    @error('campo14')
        <div>{{ $message }}</div>
    @enderror
    <button type="submit">Siguiente</button>
</form>

@endsection