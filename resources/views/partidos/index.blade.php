@extends('layouts.app')
@section('title', 'Guía de Partidos')
@section('content')

    <h1 class="text-3xl font-bold text-blue-800 mb-6">Guía de Partidos</h1>

    <table class="w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="border border-gray-300 p-2">Fecha</th>
                <th class="border border-gray-300 p-2">Local</th>
                <th class="border border-gray-300 p-2">Visitante</th>
                <th class="border border-gray-300 p-2">Resultado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partidos as $key => $partido)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 p-2">
                        <a href="{{ route('partidos.show', $key) }}" class="text-blue-700 hover:underline">
                            {{ $partido['fecha'] }}
                        </a>
                    </td>
                    <td class="border border-gray-300 p-2">{{ $partido['local'] }}</td>
                    <td class="border border-gray-300 p-2">{{ $partido['visitante'] }}</td>
                    <td class="border border-gray-300 p-2">{{ $partido['resultado'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection