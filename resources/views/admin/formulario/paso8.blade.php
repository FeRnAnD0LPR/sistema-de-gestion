@extends('layouts.admin')

@section('content')

<div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">ARCHIVOS DE ESTUDIANTES</h1>
        </div>
    </div>
    <hr>
    <h5>H)Certificación actualizada de no tener antecedentes anti autonomistas, en 
        nuestra Universidad, otorgado por la Secretaria General de la Universidad Autónoma "Tomás Frías".
    </h5>
    <hr>
    

<form action="{{ route('formulario.paso8') }}" method="POST">
    @csrf
    <label for="campo8">Campo 8</label>
    <input type="file" accept=".pdf" id="campo8" name="campo8" required>
    @error('campo8')
    <small style="color: red">Este campo es requerido</small>
    @enderror
    <button type="submit">Siguiente</button>
</form>

@endsection