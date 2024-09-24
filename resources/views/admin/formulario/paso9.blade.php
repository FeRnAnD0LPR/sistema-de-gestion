@extends('layouts.admin')

@section('content')

<div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">ARCHIVOS DE ESTUDIANTES</h1>
        </div>
    </div>
    <hr>
    <h5>I)Plan de trabajo correspondiente a las materias que postula con un enfoque basado 
        en competencias en la modalidad presencial, semipresencial, de acuerdo a las característcas 
        de las asignaturas de la carrera, este plan debe ser factíble para los recursos con que 
        cuenta la Universidad Autónoma "Tomás Frías" (Art.77 Inc. c8 del Reglamento 
        del Régimen Académico Docente de la Universidad Boliviana).
    <hr>
    

<form action="{{ route('formulario.paso9') }}" method="POST">
    @csrf
    <label for="campo9">Campo 9</label>
    <input type="file" accept=".pdf" id="campo9" name="campo9" required>
    @error('campo9')
    <small style="color: red">Este campo es requerido</small>
    @enderror
    <button type="submit">Siguiente</button>
</form>

@endsection