
@extends('adminlte::page')

@vite(['resources/css/app.css', 'resources/js/app.js'])
@section('content')

 <div class="space-x-4  font-semibold mt-2">
    {{-- <a href="#">Exportar</a>
    <a href="#">Importar</a> --}}
    <a href="{{ route('docente.create') }}"
        class="bg-gray-500  hover:bg-gray-700  text-white font-bold py-1 px-3 rounded ml-1 mt-1">
        Agregar docente
    </a>
</div>
{{-- <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
    @foreach ($docente as $docentes)
        <div class="bg-white p-6 rounded-md shadow-md">
            <img src="/imagen/{{ $docentes->imagen }}" class="w-20 h-20 rounded mx-auto" alt="">
            <p class="text-black-800 font-bold">Nombre: {{ $docentes->nombre }}</p>
            <p class="text-gray-600">Correo: {{ $docentes->correo }}</p>
            <p class="text-gray-600">Telefono: {{ $docentes->telefono }}</p>
        </div>
    @endforeach
</div> --}}
<div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
    @foreach ($docente as $docentes)
        <div class="bg-white p-6 rounded-md shadow-md transition-transform transform hover:scale-105">
            <img src="/imagen/{{ $docentes->imagen }}" class="w-20 h-20 rounded mx-auto" alt="">
            <p class="text-blue-800 font-bold text-xl mt-4">Nombre: {{ $docentes->nombre }}</p>
            <p class="text-gray-600">Correo: {{ $docentes->correo }}</p>
            <p class="text-gray-600">Telefono: {{ $docentes->telefono }}</p>
            <div class="flex justify-center">
                <a title="EDITAR" type="button" href="{{ route('docente.edit', $docentes->id) }}"
                    class="   rounded-lg w-fit p-2 mx-2 text-white
            hover:scale-125 transition-transform delay-75">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" class="w-6 h-6 text-blue-800">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                </a>

            </div>
        </div>
    @endforeach
</div>
@endsection

