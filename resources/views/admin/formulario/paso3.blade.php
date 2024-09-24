@extends('layouts.admin')

@section('content')

<div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">ARCHIVOS DE ESTUDIANTES</h1>
        </div>
    </div>
    <hr>
    <h5>D)Fotocopia legalizada del Titulo en Provisión Nacional Por secretaría general
        de la Universidad que confirió dicho documento, el cual de ser otorgado por una 
        de las Universidades del Sistema de la Universidad Boliviana. (Art.77 inc. c.2 
        Reglamento del Régimen Académico Docente de la Universidad Boliviana) ACTUALIZADA.
    </h5>
    <hr>
    

<form action="{{ route('formulario.paso3') }}" method="POST">
    @csrf
    <label for="campo3">Campo 3</label>
    <input type="file" accept=".pdf" id="campo3" name="campo3" required>
    @error('campo3')
    <small style="color: red">Este campo es requerido</small>
    @enderror
    <button type="submit">Siguiente</button>
</form>

@endsection