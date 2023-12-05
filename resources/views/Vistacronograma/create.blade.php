@extends('adminlte::page')
@vite(['resources/css/app.css', 'resources/js/app.js'])

@section('content')
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow-lg sm:rounded-lg bg-white overflow-hidden p-6 border rounded-lg"
                style="font-family: 'Verdana', sans-serif;">
                <p class="text-center font-semibold mb-4">Agregar docente</p>
                <form action="{{ route('cronograma.store') }}" method="POST" enctype="multipart/form-data"
                    class="grid {{-- En dispositivos grandes muestra 2 columnas --}} md:grid-cols-2 gap-4">
                    @csrf
                    <!-- Inputs simplificados usando clases de Tailwind CSS -->
                    <input type="text" name="ci" id="ci"
                        class="border rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-400" required
                        placeholder="ci">
                    <input type="text" name="nombre" id="nombre"
                        class="border rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-400" required
                        placeholder="nombre">
                    <input type="text" name="telefono" id="telefono"
                        class="border rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="telefono">
                    <input type="text" name="correo" id="correo"
                        class="border rounded-lg py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="correo">


                    <!-- Dropdowns -->


                    <div class="grid grid-cols-1 mt-0">
                        <img id="imagenSeleccionada" style="max-height: 200px;" class="mt-1 mx-auto">
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
                                    Seleccione
                                    la imagen</p>
                            </div>
                            <input name="imagen" id="imagen" type="file" class="hidden" />
                        </label>
                    </div>

                    <!-- Botones -->
                    <div class="flex items-center justify-center md:flex-row flex-col md:gap-4 pt-1 pb-1">
                        <a href="{{ route('cronograma.index') }}"
                            class="w-full md:w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-1 mb-2 md:mb-0 md:mt-0">Cancelar</a>
                       <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-black px-4 py-1'>Guardar</button>
                    </div>
                </form>
            </div>
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
