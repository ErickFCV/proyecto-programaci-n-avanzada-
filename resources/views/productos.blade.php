@extends('layouts.app')

@section('contenido')
    <div class="container mt-4">
       
        <h2>Lista de Productos</h2>
        
       
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto['nombre'] }}</td>
                        <td>Bs. {{ number_format($producto['precio'], 0) }}</td>
                        <td>{{ $producto['stock'] }} unidades</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr>

        {{-- Tarea 5: Mostrar promedio sin decimales [cite: 38, 40, 42] --}}
        <div class="alert alert-info">
            <strong>Precio promedio:</strong> Bs. {{ number_format($precioPromedio, 0) }}
        </div>
    </div>
@endsection