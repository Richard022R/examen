@extends('layouts.layout')

@section('title', 'Detalles del Estudiante')



@section('content')
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center">Detalles del Estudiante</h1>
        <table class="table table-bordered">
            <tr>
                <th>Nombre</th>
                <td>{{ $estudiante->nombre }}</td>
            </tr>
            <tr>
                <th>Curso</th>
                <td>{{ $estudiante->curso }}</td>
            </tr>
            <tr>
                <th>Nota 1</th>
                <td>{{ $estudiante->nota1 }}</td>
            </tr>
            <tr>
                <th>Nota 2</th>
                <td>{{ $estudiante->nota2 }}</td>
            </tr>
            <tr>
                <th>Nota 3</th>
                <td>{{ $estudiante->nota3 }}</td>
            </tr>
            <tr>
                <th>Promedio</th>
                <td>{{ ($estudiante->nota1 + $estudiante->nota2 + $estudiante->nota3) / 3 }}</td>
            </tr>
            <tr>
                <th>Condición</th>
                <td>{{ ($estudiante->nota1 + $estudiante->nota2 + $estudiante->nota3) / 3 >= 10.5 ? 'Aprobado' : 'Desaprobado' }}</td>
            </tr>
        </table>
    </div>
</div>

@endsection
