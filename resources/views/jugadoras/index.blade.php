@extends('layouts.app')
@section('title', 'Guía de Jugadoras')
@section('content')

    <h1 class="text-3xl font-bold text-blue-800 mb-6">Guía de Jugadoras</h1>

    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="border border-gray-300 p-2">Nombre</th>
                <th class="border border-gray-300 p-2">Equipo</th>
                <th class="border border-gray-300 p-2">Posicion</th>
                <th class="border border-gray-300 p-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jugadoras as $jugadora)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 p-2">
                        <a href="{{ route('jugadoras.show', $jugadora->id) }}" class="text-blue-700 hover:underline">
                            {{ $jugadora->nombre }}
                        </a>
                    </td>
                    <td class="border border-gray-300 p-2">{{ $jugadora->equipo->nombre }}</td>
                    <td class="border border-gray-300 p-2">{{ $jugadora->posicion }}</td>
                    <td class="border border-gray-300 p-2 text-center">
                        <a href="{{ route('jugadoras.edit', $jugadora->id) }}" class="text-blue-700 hover:underline">📝</a>
                        <form action="{{ route('jugadoras.destroy', $jugadora->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-700 hover:underline">❌</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p class="mt-10 text-center">
        <a href="/jugadoras/create" class="bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">Crear
            jugadora</a>
    </p>
@endsection