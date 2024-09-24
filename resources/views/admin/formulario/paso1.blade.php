@extends('layouts.admin')

@section('content')

<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">ARCHIVOS DE DOCENTES</h1>
    </div>
</div>
<hr>
    <h5>A)Carta de solicitud de postulante dirigida al Señor Decano de la Facultad de Artes,
        especificando la asignatura a la que postula.
    </h5>
<hr>
    

<form action="{{ route('formulario.paso1') }}" method="POST">
    @csrf
    <label for="campo1">Archivo a)</label>
    <input type="file" accept=".pdf" id="campo1" name="campo1" required>
    @error('campo1')
    <small style="color: red">Este campo es requerido</small>
    @enderror
    <button type="submit" class="btn btn-primary">Siguiente</button>
</form>

@endsection