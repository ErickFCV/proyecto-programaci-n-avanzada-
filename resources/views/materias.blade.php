@extends('layouts.app')

@section('titulo', 'Materias')

@section('contenido')
    <h2>Mis Materias</h2>
    <p>Resumen del estado académico actual (Datos en vivo desde Base de Datos):</p>

    <table border="1" style="width:100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr style="background-color: #007BFF; color: white;">
                <th style="padding: 10px;">Sigla</th>
                <th>Materia</th>
                <th>Créditos</th>
                <th>Nota</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materias as $m)
                <tr style="background-color: {{ $m->getColorEstado() }};">
                    <td style="padding: 10px; text-align: center;">{{ $m->getCodigo() }}</td>
                    <td style="padding: 5px 10px;">{{ $m->getNombre() }}</td>
                    <td style="text-align: center;">{{ $m->getCreditos() }}</td>
                    <td style="text-align: center; font-weight: bold;">{{ $m->getNota() }}</td>
                    <td style="text-align: center; font-weight: bold;">{{ $m->getEstado() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="margin-top: 30px; background-color: #eee; padding: 15px; border-radius: 5px;">
        <p><strong>Promedio General:</strong> {{ $promedio }}</p>
        <p><strong>Materias Aprobadas:</strong> {{ $aprobadas }} de {{ count($materias) }}</p>
    </div>
@endsection