@extends('layouts.app')
@section('title', ' Guía de Jugadoras')
@section('content')
    <div class="jugadora border rounded-lg shadow-md p-4 bg-white">
        <h2 class="text-xl font-bold text-blue-800">{{ $jugadora->nombre }}</h2>
        <p><strong>Equipo:</strong> {{ $jugadora->equipo->nombre }}</p>
        <p><strong>Posicion:</strong> {{ $jugadora->posicion }}</p>
        @if ($jugadora->foto)
        <p>
            <img src="{{ $jugadora->foto }}" alt="Jugadora de {{ $jugadora->nombre }}"
                class="h-8 w-8 object-cover rounded-full">
        </p>
    @endif
    </div>
    <p class="mt-4 text-center">
        <a href="/jugadoras" class="text-blue-700 hover:underline">Volver</a>
    </p>
@endsection
