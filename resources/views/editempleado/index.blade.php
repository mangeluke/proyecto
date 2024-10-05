<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('edit employee') }}
        </h2>
    </x-slot>
    <div class="py-6">
        <div class="max-w-xl mx-auto sm:px-4 lg:px-5">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-black">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <div>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('updatempleado.update', $empleado->id) }}">
                            @csrf
                            @method('PUT')
                        

                            <div class="space-y-4">
                                <!-- Identificación -->
                                <div class="flex flex-col">
                                    <label for="identificacion" class="font-semibold text-sm text-gray-900">
                                        Identificación
                                    </label>
                                    <input id="identificacion" type="text" name="identificacion" rows="4" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black" value="{{ $empleado->identificacion }}">



                                <!-- Nombre del empleado -->
                                <div class="flex flex-col">
                                    <label for="nombres" class="font-semibold text-sm text-gray-900">
                                        Nombre 
                                    </label>
                                    <input id="nombres" type="text" name="nombres" rows="4" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black" value="{{ $empleado->nombres }}">
                                </div>

                                <!-- Apellido del empleado -->
                                <div class="flex flex-col">
                                    <label for="apellidos" class="font-semibold text-sm text-gray-900">
                                        Apellido 
                                    </label>
                                    <input id="apellidos" type="text"  name="apellidos" rows="4" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black" value="{{ $empleado->apellidos }}">
                                </div>

                                <!-- Correo electrónico -->
                                <div class="flex flex-col">
                                    <label for="correo" class="font-semibold text-sm text-gray-900">
                                        Correo electrónico
                                    </label>
                                    <input id="correo" type="email" name="correo" rows="4" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black" value="{{ $empleado->correo}}">
                                </div>

                                <!-- Teléfono -->
                                <div class="flex flex-col">
                                    <label for="telefono" class="font-semibold text-sm text-gray-900">
                                        Teléfono
                                    </label>
                                    <input id="telefono" type="tel"  name="telefono" rows="4" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black" value="{{ $empleado->telefono}}">
                                </div>

                                <!-- Dirección -->
                                <div class="flex flex-col">
                                    <label for="direccion" class="font-semibold text-sm text-gray-900">
                                        Dirección
                                    </label>
                                    <input id="direccion" type="text"  name="direccion" rows="4" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black" value="{{ $empleado->direccion }}">
                                </div>

                                <!-- Tipo de contrato -->
                                <div class="flex flex-col">
                                    <label for="tipocontrato" class="font-semibold text-sm text-gray-900">
                                        Tipo de contrato
                                        </label>
                                    <input id="tipocontrato" type="text"  name="tipocontrato" rows="4" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black" value="{{ $empleado->tipocontrato }}">
                                </div>   

                                <!-- Fecha y hora -->
                                <div class="flex flex-col">
                                    <label for="datesemana" class="font-semibold text-sm text-gray-900">
                                        Fecha y hora
                                    </label>
                                    <input id="datesemana" name="datesemana" rows="4" class="mt-1 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white text-black" value="{{ $empleado->datesemana}}">
                                    <div id="calendar"></div>
                                    </input>

                                <!-- Botón de enviar -->
                                <div class="flex flex-col mt-4">
                                <button type="submit" class="p-2 bg-blue-600 text-gray-900 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                     Actualizar Datos
                                </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="p-5" id='calendar'></div> --}}
</x-app-layout>