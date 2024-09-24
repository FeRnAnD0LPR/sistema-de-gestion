@extends('layouts.admin')

@section('content')

<div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">ARCHIVOS DE ESTUDIANTES</h1>
        </div>
    </div>
    <hr>
    <h5>E)Fotocopia del Titulo de Maestría, Doctorado y/o Diploma en Educación Superior como mínimo
        , dictado o reconocido por el Sistema de la Universidad Boliviana, (Art. 71 inc. e y Art. 77
        INC. C.4 del Reglamento del Régimen Académico Docente de la Universidad Boliviana),
        legalizado por la Universidad que confirió dicho documento, debídamente actualizada.
    </h5>
    <hr>
    

<form action="{{ route('formula.paso5') }}" method="POST">
    @csrf
    <label for="campo5">Campo 5</label>
    <input type="file" accept=".pdf" id="campo5" name="campo5" required>
    @error('campo5')
    <small style="color: red">Este campo es requerido</small>
    @enderror
    <button type="submit">Siguiente</button>
</form>

@endsection