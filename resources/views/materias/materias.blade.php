@extends("layouts.app")
@extends("content")

<div class="container mx-auto mt-8 p-4">
    <h1 class="text-3xl font-bold mb-4">MATERIAS A ELEGIR:</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($materias as $materia)
            <button
                class="bg-blue-500 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-700"
                onclick="seleccionarMateria('{{ $materia }}')"
            >
                {{ $materia }}
            </button>
        @endforeach
    </div>
</div>

<script>
    function seleccionarMateria(materia) {
        // Agrega aquí la lógica para manejar la selección de la materia
        alert('Materia seleccionada: ' + materia);
    }
</script>




@endsection
