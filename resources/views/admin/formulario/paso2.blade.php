@extends('layouts.admin')

@section('content')


    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">ARCHIVOS DE ESTUDIANTES</h1>
        </div>
    </div>
    <hr>
    <h5>B)Fotocopia legalizada del diploma Academico por Secretaria general
        de la Universidad que confirio dicho documento, el cual debe ser otorgado
        por una de las universidades del Sistema de la Universidad Boliviana
        (Art.77 inc.c.2 Reglamento del Régimen AcadémicoDocente de la Universidad Boliviana.)
    </h5>
    <hr>
    <div class="row">
        
    <form action="{{ route('formulario.paso2') }}" method="POST">
        @csrf
        <label for="campo2">Archivo b)</label>
        <input type="text" accept=".pdf" id="campo2" name="campo2" required>
        @error('campo2')
        <small style="color: red">Este campo es requerido</small>
        @enderror
        <button type="submit">Siguiente</button>
    </form>


    </div>
@endsection