@extends('layouts.app')
@section('title', ' Crear Jugadora')
@section('content')
    <form action="{{route('jugadoras.store')}}" method="post" class='flex flex-col items-center space-y-4'>
        @csrf
        <div class='w-full max-w-xs'>
            <label for="nombre" class='block text-gray-500 text-sm font-bold mb-2'></label>
            <input type="text" name="nombre" id="nombre" placeholder="Introduce el nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('nombre')
                <p class="text-xs text-red-600">{{$message}}</p>
            @enderror
        </div>
        <div class='w-full max-w-xs'>
            <label for="foto" class='block text-gray-500 text-sm font-bold mb-2'></label>
            <input type="text" name="foto" id="foto" placeholder="Introduce la foto" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('foto')
                <p class="text-xs text-red-600">{{$message}}</p>
            @enderror
        </div>
        <div class='w-full max-w-xs'>
            <label for="posicion" class='block text-gray-500 text-sm font-bold mb-2'></label>
            <select name="posicion" id="posicion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Seleccione su posicion</option>
                <option value="Delantera">Delantera</option>
                <option value="Mediocampista">Mediocampista</option>
                <option value="Defensa">Defensa</option>
                <option value="Portera">Portera</option>
            </select>
            @error('posicion')
                <p class="text-xs text-red-600">{{$message}}</p>
            @enderror
        </div>
        <div class='w-full max-w-xs'>
            <label for="equipos_id" class='block text-gray-500 text-sm font-bold mb-2'></label>
            <select name="equipos_id" id="equipos_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Seleccione su equipo</option>
                @foreach ($equipos as $equipo)
                    <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                @endforeach
            </select>
            @error('equipos_id')
                <p class="text-xs text-red-600">{{$message}}</p>
            @enderror
        </div>  
        <button type="submit" class="bg-blue-400 text-while font-bold py-2 px-4 rounded">Crear jugadora</button>
    </form>
@endsection