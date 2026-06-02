@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')
    <h2>Contacto</h2>
    <p>Puedes escribirme mediante el siguiente formulario:</p>
    
    <form action="{{ route('contacto') }}" method="POST" style="display: flex; flex-direction: column; max-width: 400px; gap: 15px; margin-top: 20px;">
        @csrf 
        
        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre" required style="padding: 8px;">

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required style="padding: 8px;">

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" rows="5" required style="padding: 8px;"></textarea>

        <button type="submit" style="background-color: #007BFF; color: white; padding: 10px; border: none; cursor: pointer; font-weight: bold; border-radius: 4px;">Enviar Mensaje</button>
    </form>
@endsection