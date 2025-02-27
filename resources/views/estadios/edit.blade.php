@extends('layouts.app')
@section('title', 'Guía de equipos')
@section('content')
    <form action="{{ route('estadios.update', $estadio->id) }}" method="POST" enctype="multipart/form-data"
        class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $estadio->nombre) }}" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 
            @error('nombre') border-red-500 @enderror" />
            @error('nombre')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="ciudad" class="block text-sm font-medium text-gray-700 mb-1">Ciudad:</label>
            <input type="text" name="ciudad" id="ciudad" value="{{ old('ciudad', $estadio->ciudad) }}" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 
            @error('ciudad') border-red-500 @enderror" />
            @error('ciudad')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="capacidad" class="block text-sm font-medium text-gray-700 mb-1">Capacidad:</label>
            <input type="number" name="capacidad" id="capacidad" value="{{ old('capacidad', $estadio->capacidad) }}" required
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 
            @error('capacidad') border-red-500 @enderror" />
            @error('capacidad')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit"
            class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg shadow hover:bg-blue-600 focus:ring focus:ring-blue-300">
            Actualizar estadio
        </button>
    </form>
@endsection