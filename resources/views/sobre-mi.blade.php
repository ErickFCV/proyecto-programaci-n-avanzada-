@extends('layouts.app')

@section('titulo', 'Sobre Mí')

@section('contenido')
    <h2>Sobre Mí</h2>
    <p>Hola, mi nombre es {{ $nombre }} y actualmente curso el {{ $semestre }} de {{ $carrera }}.</p>
    
    <h3>Mis Habilidades Técnicas</h3>
    <div style="margin-top: 20px;">
        @foreach($habilidades as $habilidad => $porcentaje)
            <div style="margin-bottom: 15px;">
                <span><strong>{{ $habilidad }}</strong> ({{ $porcentaje }}%)</span>
                <div style="background-color: #eee; width: 100%; border-radius: 4px; overflow: hidden; margin-top: 5px;">
                    <div style="background-color: #007BFF; width: {{ $porcentaje }}%; height: 15px;"></div>
                </div>
            </div>
        @endforeach
    </div>
@endsection