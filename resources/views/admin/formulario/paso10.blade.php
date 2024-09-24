@extends('layouts.admin')

@section('content')

<div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">ARCHIVOS DE ESTUDIANTES</h1>
        </div>
    </div>
    <hr>
    <h5>J)Certificación actualizada de no tener cuentas pendientes con la carrera 
        o Universidad Autónoma “Tomás Frías ” (cursos de posgrado y otras 
        obligaciones pendientes de pago o rendición de cuentas). Expedido por 
        la Dirección Administrativa Financiera. Expedido por la Dirección 
        Administrativa Financiera.
    </h5>
    <hr>
    

<form action="{{ route('formulario.paso10') }}" method="POST">
    @csrf
    <label for="campo10">Campo 10</label>
    <input type="file" accept=".pdf" id="campo10" name="campo10" required>
    @error('campo10')
    <small style="color: red">Este campo es requerido</small>
    @enderror
    <button type="submit">Siguiente</button>
</form>

@endsection