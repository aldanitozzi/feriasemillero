@extends("adminlte::page")
@section('title','coders free')
@section('content_header')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educación en Casa</title>
    <style>
        /* Aplicar estilos a la porción específica del texto */
        .blue-bold {
            color: blue;
            font-weight: bold;
        }

        /* Estilos para la imagen específica */
        .ajustar-pantalla {
            width: 100%;
            height: auto;
            max-width: 100%; /* Asegura que la imagen no se agrande más allá de su tamaño nativo */
            display: block; /* Elimina el espacio adicional por debajo de la imagen */
            margin: auto; /* Centra la imagen en la pantalla */
        }
    </style>
</head>
<body>

<!-- Encabezado con texto mejorado -->
{{-- <h1>LA EDUCACIÓN <span class="blue-bold">EMPIEZA</span> DESDE CASA</h1> --}}

<!-- Agregar la imagen específica desde el directorio images -->
<img src="images/prueba3.jpg" alt="Prueba de imagen" class="ajustar-pantalla">

</body>
</html>



@stop
