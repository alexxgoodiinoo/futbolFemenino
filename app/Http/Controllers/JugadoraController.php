<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugadora;
use Illuminate\Http\Request;

class JugadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jugadoras = Jugadora::all();
        return view('jugadoras.index', compact('jugadoras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $equipos = Equipo::all();
        return view('jugadoras.create', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nombre" => "required|string",
            "posicion" => "required|in:Portera,Defensa,Mediocampista,Delantera",
            "foto" => "string",
            "equipos_id" => "required|integer"
        ],[
            "nombre.required" => "El nombre es obligatorio",
            "nombre.string" => "El nombre tiene que ser una cadena",
            "posicion.required" => "La posicion es obligatoria",
            "posicion.in" => "La posicion tiene que ser Portera, Defensa, Mediocampista o Delantera",
            "foto.string" => "La foto tiene que ser tipo imagen",
            "equipos_id.required" => "El equipo es obligatorio",
            "equipos_id.integer" => "El equipo tiene que ser un numero",
        ]);

        $jugadora = new Jugadora();
        $jugadora->nombre = $request->nombre;
        $jugadora->posicion = $request->posicion;
        $jugadora->foto = $request->foto;
        $jugadora->equipos_id = $request->equipos_id;
        $jugadora->save();

        return redirect()->route('jugadoras.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jugadora = Jugadora::find($id);
        return view('jugadoras.show', compact('jugadora'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipos = Equipo::all();
        $jugadora = Jugadora::find($id);
        return view('jugadoras.edit', compact('equipos', 'jugadora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "nombre" => "required|string",
            "posicion" => "required|in:Portera,Defensa,Mediocampista,Delantera",
            "foto" => "string",
            "equipos_id" => "required|integer"
        ],[
            "nombre.required" => "El nombre es obligatorio",
            "nombre.string" => "El nombre tiene que ser una cadena",
            "posicion.required" => "La posicion es obligatoria",
            "posicion.in" => "La posicion tiene que ser Portera, Defensa, Mediocampista o Delantera",
            "foto.string" => "La foto tiene que ser tipo imagen",
            "equipos_id.required" => "El equipo es obligatorio",
            "equipos_id.integer" => "El equipo tiene que ser un numero",
        ]);

        $jugadora = Jugadora::find($id);
        $jugadora->nombre = $request->nombre;
        $jugadora->posicion = $request->posicion;
        $jugadora->foto = $request->foto;
        $jugadora->equipos_id = $request->equipos_id;
        $jugadora->save();

        return redirect()->route('jugadoras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jugadora = Jugadora::find($id);
        $jugadora->delete();
        return redirect()->route('jugadoras.index');
    }
}
