<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') - Mi Proyecto</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; color: #333; }
        header { background-color: #007BFF; color: white; padding: 20px; text-align: center; }
        nav { background-color: #333; padding: 10px; text-align: center; }
        nav a { color: white; margin: 0 15px; text-decoration: none; font-weight: bold; }
        nav a:hover { color: #007BFF; }
        main { padding: 20px; max-width: 900px; margin: 20px auto; background: white; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding-bottom: 60px; }
        footer { text-align: center; padding: 15px; background: #333; color: white; margin-top: 40px; }
        footer p { margin: 0; font-size: 1rem; }
    </style>
</head>
<body>

    <header>
        <h1>Mi Portafolio Académico</h1>
    </header>

    <nav>
        <a href="{{ route('inicio') }}">Inicio</a>
        <a href="{{ route('sobre-mi') }}">Sobre mí</a>
        <a href="{{ route('materias') }}">Materias</a>
        <a href="{{ route('contacto') }}">Contacto</a>
    </nav>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} - Universidad San Francisco de Asís</p>
    </footer>

</body>
</html>