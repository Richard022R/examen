@extends('layouts.layout')

@section('title', 'Listado')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Listado de Estudiantes</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Curso</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td><a href="{{ route('estudiantes.show', $estudiante->id) }}">{{ $estudiante->nombre }}</a></td>
                        <td>{{ $estudiante->curso }}</td>
          
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection