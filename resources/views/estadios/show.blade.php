@extends('layouts.app')
@section('title', ' Guía de Estadios')
@section('content')
    <div class="estadio border rounded-lg shadow-md p-4 bg-white">
        <h2 class="text-xl font-bold text-blue-800">{{ $estadio->nombre }}</h2>
        <p><strong>Ciudad:</strong> {{ $estadio->ciudad }}</p>
        <p><strong>Capacidad:</strong> {{ $estadio->capacidad }}</p>
        <p><strong>Equipo principal:</strong> {{ $estadio->equipoprincipal }}</p>
    </div>
    <p class="mt-4 text-center">
        <a href="/estadios" class="text-blue-700 hover:underline">Volver</a>
    </p>
@endsection
