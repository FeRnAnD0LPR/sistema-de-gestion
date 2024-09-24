@extends('layouts.admin')

@section('content')

<div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">ARCHIVOS DE ESTUDIANTES</h1>
        </div>
    </div>
    <hr>
    <h5>F)A creditar experiencia profesional no menor a dos años, a partir de la obtención
        del Titulo en Provisión Nacional, (Art.71 Inc. c y Art.77 Inc.c3 del Reglamento del Regimen
        Académico Docente de la Universidad Boliviana).
    </h5>
    <hr>
    

<form action="{{ route('formulario.paso6') }}" method="POST">
    @csrf
    <label for="campo6">Campo 6</label>
    <input type="file" accept=".pdf" id="campo6" name="campo6" required>
    @error('campo6')
    <small style="color: red">Este campo es requerido</small>
    @enderror
    <button type="submit">Siguiente</button>
</form>

@endsection