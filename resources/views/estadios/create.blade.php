@extends('layouts.app')
@section('title', ' Crear Estadios')
@section('content')
    <form action="{{route('estadios.store')}}" method="post" class='flex flex-col items-center space-y-4'>
        @csrf
        <div class='w-full max-w-xs'>
            <label for="nombre" class='block text-gray-500 text-sm font-bold mb-2'></label>
            <input type="text" name="nombre" id="nombre" placeholder="Introduce el nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class='w-full max-w-xs'>
            <label for="ciudad" class='block text-gray-500 text-sm font-bold mb-2'></label>
            <input type="text" name="ciudad" id="ciudad" placeholder="Introduce la ciudad" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class='w-full max-w-xs'>
            <label for="capacidad" class='block text-gray-500 text-sm font-bold mb-2'></label>
            <input type="number" name="capacidad" id="capacidad" placeholder="Introduce la capacidad" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" class="bg-blue-400 text-while font-bold py-2 px-4 rounded">Crear estadio</button>
    </form>
@endsection