@extends('layouts.admin')

@section('content')

<div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">ARCHIVOS DE ESTUDIANTES</h1>
        </div>
    </div>
    <hr>
    <h5>L)Certificación de manejo de entornos virtuales 
        para la enseñanza virtual acorde al área de conocimiento que postula.
    </h5>
    <hr>
    

<form action="{{ route('formula.paso7') }}" method="POST">
    @csrf
    <label for="campo7">Campo 7</label>
    <input type="file" accept=".pdf" id="campo7" name="campo7" required>
    @error('campo7')
    <small style="color: red">Este campo es requerido</small>
    @enderror
    <button type="submit">Finalizar</button>
</form>

@endsection