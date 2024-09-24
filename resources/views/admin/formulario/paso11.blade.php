@extends('layouts.admin')

@section('content')

<div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">ARCHIVOS DE ESTUDIANTES</h1>
        </div>
    </div>
    <hr>
    <h5>K)Declaración jurada, actualizada, ante Notario de Fe Pública que especifique los siguientes extremos:
        <br>
        1. No estar comprendido en: las incompatibilidades establecidas por el reglamento de Incompatibilidades aprobado por el honorable Consejo Universitario (Resolución Nro. 86-2007 del HCU).
        <br> 
        2. No estar comprendido dentro de las limitaciones establecidas en el artículo 12 del Decreto Supremo 4848 (remuneración máxima en el sector público) y articulo 24 (doble percepción) del Decreto Supremo 4848.

    </h5>
    <hr>
    

<form action="{{ route('formulario.paso11') }}" method="POST">
    @csrf
    <label for="campo11">Campo 11</label>
    <input type="file" accept=".pdf" id="campo11" name="campo11" required>
    @error('campo11')
    <small style="color: red">Este campo es requerido</small>
    @enderror
    <button type="submit">Siguiente</button>
</form>

@endsection