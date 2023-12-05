@extends('layouts.app')
@extends('adminlte::page')
@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Notas</title>
</head>
<body>

<div>
    <h1>Gestor de Notas</h1>

    <div>
        <h2>Notas Agregadas</h2>
        @foreach ($notas as $nota)
            <p><strong>Materia:</strong> {{ $nota->materia }}, <strong>Nota:</strong> {{ $nota->nota }}</p>
        @endforeach
    </div>

    <div>
        <h2>Agregar Nota</h2>
        <form action="{{ route('notas.store') }}" method="POST">
            @csrf
            <label for="materia">Materia:</label>
            <input type="text" name="materia" required>

            <label for="nota">Nota:</label>
            <input type="number" name="nota" required>

            <button type="submit">Agregar</button>
        </form>
    </div>
</div>

</body>
</html>
