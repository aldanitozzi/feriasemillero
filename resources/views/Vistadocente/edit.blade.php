@extends('adminlte::page')
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')
    <div class="py-4">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Editar Datos del  Docente</h2>

                <form action="{{ route('docente.update',$docente->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Indica que esta es una solicitud PUT para actualizar -->

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="ci" class="block text-gray-700 text-sm font-bold mb-2">ci</label>
                            <input type="text" name="ci" id="ci" value="{{ $docente->ci }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre </label>
                            <input type="text" name="nombre" id="nombre" value="{{ $docente->nombre }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="telefono" class="block text-gray-700 text-sm font-bold mb-2">telefono</label>
                            <input type="text" name="telefono" id="telefono" value="{{ $docente->telefono }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>
                        <div>
                            <label for="correo" class="block text-gray-700 text-sm font-bold mb-2">correo</label>
                            <input type="text" name="correo" id="correo" value="{{ $docente->correo }}"
                                class="border rounded-lg py-2 px-3 w-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                        </div>





                    <!-- Imagen -->
                     <div class="flex items-center justify-center">
                        <div class="grid grid-cols-1 mt-1">
                            <img src="{{ asset('imagen/' . $docente->imagen) }}" width="200px" id="imagenSeleccionada">

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
                        <a href="{{ route('docente.index') }}" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
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
    {{-- <div class="flex items-center justify-center">
        <div class="grid grid-cols-1 mt-1">
            <img src="{{ asset('imagen/' . $docente->imagen) }}" width="200px" id="imagenSeleccionada">
        </div>
    </div>

    <!-- Botón de imagen -->
    <div class="flex items-center justify-center">
        <label class="flex flex-col border-4 border-dashed w-full h-13 hover:bg-gray-100 hover:border-purple-300 group">
            <div class="flex flex-col items-center justify-center pt-1">
                <svg class="w-6 h-6 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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

    <div class='flex items-center justify-center md:gap-8 gap-4 pt-1 pb-5'>
        <a href="{{ route('docente.index') }}"
            class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancelar</a>
        <button type="submit"
            class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Guardar</button>
    </div>

    <!-- Script para manejar la carga de la imagen -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(e) {
            $('#imagen').change(function() {
                // Crear un objeto FormData para manejar la carga de archivos
                var formData = new FormData();
                formData.append('imagen', this.files[0]);

                // Enviar la solicitud AJAX al servidor
                $.ajax({
                    url: '{{ route('ruta_de_tu_controlador.subir-imagen') }}',
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Actualizar la imagen seleccionada en el DOM
                        $('#imagenSeleccionada').attr('src', response.url);
                    },
                    error: function(error) {
                        console.error('Error al subir la imagen:', error);
                    }
                });
            });
        });
    </script> --}}
