<?php

namespace App\Http\Controllers;

use App\Models\Estadio;
use Illuminate\Http\Request;

class EstadioController extends Controller{

    public function index(){
        $estadios = Estadio::all();
        return view('estadios.index', compact('estadios'));
    }

    public function show($id){
        $estadio = Estadio::find($id);
        return view('estadios.show', compact('estadio'));
    }
    
    public function create(){
      return view('estadios.create');
    }

    public function store(Request $request){
      $request->validate([
        "nombre" => "required|string",
        "ciudad" => "required|string",
        "capacidad" => "required|integer"
      ],[
        "nombre.required" => "El nombre es obligatorio",
        "nombre.string" => "El nombre tiene que ser una cadena",
        "ciudad.required" => "La ciudad es obligatoria",
        "ciudad.string" => "La ciudad tiene que ser una cadena",
        "capacidad.required" => "La capacidad es obligatoria",
        "capacidad.integer" => "La capacidad tiene que ser un entero",
      ]);
      $estadio = new Estadio();
      $estadio->nombre = $request->nombre;
      $estadio->ciudad = $request->ciudad;
      $estadio->capacidad = $request->capacidad;
      $estadio->save();
      
      return redirect()->route('estadios.index');
    }

    public function edit($id){
      $estadio = Estadio::find($id);
      return view('estadios.edit', compact('estadio'));
    }

    public function update($id, Request $request){
      $request->validate([
        "nombre" => "required|string",
        "ciudad" => "required|string",
        "capacidad" => "required|integer"
      ],[
        "nombre.required" => "El nombre es obligatorio",
        "nombre.string" => "El nombre tiene que ser una cadena",
        "ciudad.required" => "La ciudad es obligatoria",
        "ciudad.string" => "La ciudad tiene que ser una cadena",
        "capacidad.required" => "La capacidad es obligatoria",
        "capacidad.integer" => "La capacidad tiene que ser un entero",
      ]);
      $estadio = Estadio::find($id);
      $estadio->nombre = $request->nombre;
      $estadio->ciudad = $request->ciudad;
      $estadio->capacidad = $request->capacidad;
      $estadio->save();
      
      return redirect()->route('estadios.index');
    }

    public function destroy($id){
      $estadio = Estadio::find($id);
      $estadio->delete();

      return redirect()->route('estadios.index');
    }
}