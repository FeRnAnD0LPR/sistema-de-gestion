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
    

<form action="{{ route('formulario.paso12') }}" method="POST">
    @csrf
    <label for="campo12">Campo 12</label>
    <input type="file" accept=".pdf" id="campo12" name="campo12" required>
    @error('campo12')
    <small style="color: red">Este campo es requerido</small>
    @enderror
    <button type="submit">Finalizar</button>
</form>

@endsection