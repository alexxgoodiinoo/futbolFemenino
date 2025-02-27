<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugadorasController extends Controller{
    public $jugadoras = [
        ['nombre' => 'Alexia Putellas', 'equipo' => 'Barcelona', 'posicion' => 'Centrocampista'],
        ['nombre' => 'Esther González', 'equipo' => 'Atlético de Madrid', 'posicion' => 'Delantera'],
        ['nombre' => 'Misa Rodríguez', 'equipo' => 'Real Madrid', 'posicion' => 'Portera'],
    ];

    public function index(){
        $jugadoras = $this->jugadoras;
        return view('jugadoras.index', compact('jugadoras'));
    }

    public function show($id){
        $jugadora = $this->jugadoras[$id];
        return view('jugadoras.show', compact('jugadora'));
    }
}
