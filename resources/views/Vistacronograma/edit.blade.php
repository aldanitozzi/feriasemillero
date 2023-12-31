@extends('adminlte::page')
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')
    <div class="py-4">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Editar Datos del  Docente</h2>

                <form action="{{ route('cronograma.update',$cronograma->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Indica que esta es una solicitud PUT para actualizar -->

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="ci" class="block text-gray-700 text-sm font-bold mb-2">ci</label>
                            <input type="text" name="ci" id="ci" value="{{ $cronograma->ci }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre </label>
                            <input type="text" name="nombre" id="nombre" value="{{ $cronograma->nombre }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>

                        <div>
                            <label for="matematicas" class="block text-gray-700 text-sm font-bold mb-2">matematicas</label>
                            <input type="text" name="matematicas" id="matematicas" value="{{ $cronograma->matematicas }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="fisica" class="block text-gray-700 text-sm font-bold mb-2">fisica</label>
                            <input type="text" name="fisica" id="fisica" value="{{ $cronograma->fisica }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="quimica" class="block text-gray-700 text-sm font-bold mb-2">quimica</label>
                            <input type="text" name="quimica" id="quimica" value="{{ $cronograma->quimica }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="lenguaje" class="block text-gray-700 text-sm font-bold mb-2">lenguaje</label>
                            <input type="text" name="lenguaje" id="lenguaje" value="{{ $cronograma->lenguaje }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="musica" class="block text-gray-700 text-sm font-bold mb-2">musica</label>
                            <input type="text" name="musica" id="lenguaje" value="{{ $cronograma->musica }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="psicologia" class="block text-gray-700 text-sm font-bold mb-2">psicologia</label>
                            <input type="psicologia" name="psicologia" id="psicologia" value="{{ $cronograma->psicologia }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="educacion_fisica" class="block text-gray-700 text-sm font-bold mb-2">educacion_fisica</label>
                            <input type="educacion_fisica" name="educacion_fisica" id="educacion_fisica" value="{{ $cronograma->educacion_fisica }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="religion" class="block text-gray-700 text-sm font-bold mb-2">religion</label>
                            <input type="religion" name="religion" id="religion" value="{{ $cronograma->religion }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="artes_plasticas" class="block text-gray-700 text-sm font-bold mb-2">artes_plasticas</label>
                            <input type="artes_plasticas" name="artes_plasticas" id="artes_plasticas" value="{{ $cronograma->artes_plasticas }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="sociales" class="block text-gray-700 text-sm font-bold mb-2">sociales</label>
                            <input type="sociales" name="sociales" id="sociales" value="{{ $cronograma->sociales }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                    <!-- Imagen -->
                     <div class="flex items-center justify-center">
                        <div class="grid grid-cols-1 mt-1">
                            <img src="{{ asset('imagen/' . $cronograma->imagen) }}" width="200px" id="imagenSeleccionada">

                        </div>
                    </div>

                    <!-- Botón de imagen -->
                    <div class="flex items-center justify-center">
                        <label
                            class="flex flex-col border-4 border-dashed w-full h-13 hover:bg-gray-100 hover:border-purple-300 group">
                            <div class="flex flex-col items-center justify-center pt-1">
                                <svg class="w-6 h-6 text-purple-400 group-hover:text-purple-600" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class="text-center text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider">
                                    Seleccione la imagen
                                </p>
                            </div>
                            <input name="imagen" id="imagen" type="file" class="hidden" />
                        </label>
                    </div>

                    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-1 pb-5'>
                        <a href="{{ route('cronograma.index') }}" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
                        <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Guardar</button>
                        </div>
                </form>
            </div>
        </div>
    @endsection


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(e) {
            $('#imagen').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#imagenSeleccionada').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
