<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-4 lg:px-5">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-black">
                    @if (session('success'))
                    <script>
                        Swal.fire({
                            title: 'Éxito',
                            text: '{{ session('success') }}',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    </script>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <div class="container">
                        <form method="POST" action="{{ route('empleado.store') }}">
                            @csrf

                            <div class="space-y-4">
                                <!-- Identificación -->
                                <div class="flex flex-col">
                                    <label for="identificacion" class="font-semibold text-sm text-gray-900">
                                        Identificación
                                    </label>
                                    <input id="identificacion" type="text" name="identificacion" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black">
                                </div>

                                <!-- Nombre del empleado -->
                                <div class="flex flex-col">
                                    <label for="nombres" class="font-semibold text-sm text-gray-900">
                                        Nombre 
                                    </label>
                                    <input id="nombres" type="text" name="nombres" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black">
                                </div>

                                <!-- Apellido del empleado -->
                                <div class="flex flex-col">
                                    <label for="apellidos" class="font-semibold text-sm text-gray-900">
                                        Apellido 
                                    </label>
                                    <input id="apellidos" type="text" name="apellidos" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black">
                                </div>

                                <!-- Correo electrónico -->
                                <div class="flex flex-col">
                                    <label for="correo" class="font-semibold text-sm text-gray-900">
                                        Correo electrónico
                                    </label>
                                    <input id="correo" type="email" name="correo" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black">
                                </div>

                                <!-- Teléfono -->
                                <div class="flex flex-col">
                                    <label for="telefono" class="font-semibold text-sm text-gray-900">
                                        Teléfono
                                    </label>
                                    <input id="telefono" type="tel" name="telefono" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black">
                                </div>

                                <!-- Dirección -->
                                <div class="flex flex-col">
                                    <label for="direccion" class="font-semibold text-sm text-gray-900">
                                        Dirección
                                    </label>
                                    <input id="direccion" type="text" name="direccion" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black">
                                </div>

                                <!-- Tipo de contrato -->
                                <div class="flex flex-col">
                                    <label for="tipocontrato" class="font-semibold text-sm text-gray-900">
                                        Tipo de contrato
                                    </label>
                                    <select id="tipocontrato" name="tipocontrato" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black">
                                        <option value="full_time">Tiempo completo</option>
                                        <option value="part_time">Medio tiempo</option>
                                        <option value="temporary">Temporal</option>
                                    </select>
                                </div>

                                <!-- Fecha y hora -->
                                <div class="flex flex-col">
                                    <label for="datesemana" class="font-semibold text-sm text-gray-900">
                                        Fecha y hora
                                    </label>
                                    <input id="datesemana" type="datetime-local" name="datesemana" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black">
                                </div>

                                <!-- Botón de enviar -->
                                <div class="flex flex-col mt-4">
                                    <button type="submit" class="p-2 bg-blue-600 text-gray-900 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>