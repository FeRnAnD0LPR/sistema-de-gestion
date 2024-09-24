@extends('layouts.admin')

@section('content')
<head>
    <title>Registro de Nombres</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-header">Registro de Curriculum</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('hojas.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                        
                        <div class="col-md-3">
                            <div class="name-group">
                                <div class="form-group">
                                    <label for="hojas[0][titulo]">Titulo</label>
                                    <input type="text" class="form-control" name="hojas[0][titulo]" required>
                                    @error('hojas[0][titulo]')
                                    <small style="color: red">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                            
                        <div class="col-md-2">
                            <div class="name-group">
                                <div class="form-group">
                                    <label for="hojas[0][entidad]">Entidad</label>
                                    <input type="text" class="form-control" name="hojas[0][entidad]" required>
                                    @error('hojas[0][entidad]')
                                    <small style="color: red">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="name-group">    
                                <div class="form-group">
                                    <label for="hojas[0][fecha]">Fecha</label>
                                    <input type="date" class="form-control" name="hojas[0][fecha]" max="2024-06-13" required>
                                    @error('hojas[0][fecha]')
                                    <small style="color: red">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="name-group">
                                <div class="form-group">
                                    <label for="hojas[0][documento]">Documento</label>
                                    <input type="text" class="form-control" name="hojas[0][documento]" required>
                                    @error('hojas[0][documento]')
                                    <small style="color: red">Este campo es requerido</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                        <div id="nameList"></div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                        <button type="button" class="btn btn-primary" id="addName">+</button>
                        <button type="submit" class="btn btn-success">Registrar</button>
                        
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
                </div>
            </div>
        </div>

<head>
    <title>Lista de Registros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Lista de Registros</h1>
    <table>
        <thead>
            <tr>
                <th>Nro</th>
                <th>Titulo</th>
                <th>Entidad</th>
                <th>Fecha</th>
                <th>Documento</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hojas as $hoja)
                <tr>
                    <td>{{ $hoja->id}}</td>
                    <td>{{ $hoja->titulo }}</td>
                    <td>{{ $hoja->entidad }}</td>
                    <td>{{ $hoja->fecha}}</td>
                    <td>{{ $hoja->documento }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let nameIndex = 1;
    
    $('#addName').click(function() {
        let nameTemplate = `
        
            <div class="row name-group mb-3">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="hojas[${nameIndex}][titulo]">Titulo</label>
                    <input type="text" class="form-control" name="hojas[${nameIndex}][titulo]" required>
                </div>
            </div>
            
            <div class="col-md-2">
                <div class="form-group">
                    <label for="hojas[${nameIndex}][entidad]">Entidad</label>
                    <input type="text" class="form-control" name="hojas[${nameIndex}][entidad]" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="hojas[${nameIndex}][fecha]">Fecha</label>
                    <input type="date" class="form-control" name="hojas[${nameIndex}][fecha]" max="2024-06-13" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="hojas[${nameIndex}][documento]">Documento</label>
                    <input type="text" class="form-control" name="hojas[${nameIndex}][documento]" required>
                </div>
            </div>
            <div class="col-1">
            <br>
                <button type="button" class="btn btn-danger removeName">-</button>
            </div>
            </div>
               
        `;
        $('#nameList').append(nameTemplate);
        nameIndex++;
    });

    $(document).on('click', '.removeName', function() {
        $(this).closest('.name-group').remove();
    });
    
});
</script>
@endsection