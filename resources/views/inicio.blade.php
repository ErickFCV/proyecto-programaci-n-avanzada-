@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <h1>Bienvenido a mi proyecto</h1>
    <p>Este es mi portafolio académico SIS-500.</p>
    
    <div class="datos-personales">
        <p><strong>Estudiante:</strong> {{ $nombre }}</p>
        <p><strong>Carrera:</strong> {{ $carrera }}</p>
        <p><strong>Semestre:</strong> {{ $semestre }}</p>
    </div>
@endsection