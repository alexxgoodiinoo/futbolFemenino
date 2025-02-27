@extends('layouts.app')
@section('title', 'Editar Jugadora')
@section('content')
    <form action="{{ route('jugadoras.update', $jugadora->id) }}" method="POST" enctype="multipart/form-data"
        class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $jugadora->nombre) }}" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 
            @error('nombre') border-red-500 @enderror" />
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Foto:</label>
            <input type="text" name="foto" id="foto" value="{{ old('foto', $jugadora->foto) }}"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 
            @error('foto') border-red-500 @enderror" />
            @error('foto')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="posicion" class="block text-sm font-medium text-gray-700 mb-1">Posición:</label>
            <select name="posicion" id="posicion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Seleccione su posición</option>
                <option value="Delantera" {{ old('posicion', $jugadora->posicion) == 'Delantera' ? 'selected' : '' }}>Delantera</option>
                <option value="Mediocampista" {{ old('posicion', $jugadora->posicion) == 'Mediocampista' ? 'selected' : '' }}>Mediocampista</option>
                <option value="Defensa" {{ old('posicion', $jugadora->posicion) == 'Defensa' ? 'selected' : '' }}>Defensa</option>
                <option value="Portera" {{ old('posicion', $jugadora->posicion) == 'Portera' ? 'selected' : '' }}>Portera</option>
            </select>
            @error('posicion')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="equipos_id" class='block text-gray-500 text-sm font-bold mb-2'>Equipo:</label>
            <select name="equipos_id" id="equipos_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Seleccione su equipo</option>
                @foreach ($equipos as $equipo)
                    <option value="{{ $equipo->id }}" {{ old('equipos_id', $jugadora->equipos_id) == $equipo->id ? 'selected' : '' }}>
                        {{ $equipo->nombre }}
                    </option>
                @endforeach
            </select>
            @error('equipos_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg shadow hover:bg-blue-600 focus:ring focus:ring-blue-300">
            Actualizar jugadora
        </button>
    </form>
@endsection