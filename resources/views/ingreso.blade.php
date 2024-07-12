@extends('layouts.layout')

@section('title', 'Ingreso')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Crear Estudiante</h1>
            <form action="{{ route('estudiantes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="curso">Curso</label>
                    <input type="text" class="form-control" id="curso" name="curso" required>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label for="nota1">Nota 1</label>
                        <input type="number" class="form-control" id="nota1" name="nota1" min="0" max="20" required>
                    </div>
                    <div class="col">
                        <label for="nota2">Nota 2</label>
                        <input type="number" class="form-control" id="nota2" name="nota2" min="0" max="20" required>
                    </div>
                    <div class="col">
                        <label for="nota3">Nota 3</label>
                        <input type="number" class="form-control" id="nota3" name="nota3" min="0" max="20" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>

@endsection