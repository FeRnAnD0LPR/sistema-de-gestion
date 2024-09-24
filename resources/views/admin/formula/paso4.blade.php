@extends('layouts.admin')

@section('content')

<div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">ARCHIVOS DE ESTUDIANTES</h1>
        </div>
    </div>
    <hr>
    <h5>D) Fotocopia de la Cédula de Identidad, con verificación de datos por Secretaría General de la 
        Universidad Autónoma "Tomás Frías". ACTUALIZADA.
    </h5>
    <hr>
    

<form action="{{ route('formula.paso4') }}" method="POST">
    @csrf
    <label for="campo4">Campo 4</label>
    <input type="file" accept=".pdf" id="campo4" name="campo4" required>
    @error('campo4')
    <small style="color: red">Este campo es requerido</small>
    @enderror
    <button type="submit">Siguiente</button>
</form>

@endsection