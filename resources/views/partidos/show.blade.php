@extends('layouts.app')
@section('title', ' Guía de Partidos')
@section('content')
    <x-partido :local="$partido['local']" :visitante="$partido['visitante']" :fecha="$partido['fecha']" :resultado="$partido['resultado']"/>
    <p class="mt-4 text-center">
        <a href="/partidos" class="text-blue-700 hover:underline">Volver</a>
    </p>
@endsection