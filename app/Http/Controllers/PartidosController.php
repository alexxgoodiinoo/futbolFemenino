<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidosController extends Controller{
    public $partidos = [
        ['local' => 'Barcelona', 'visitante' => 'Atlético de Marid', 'fecha' => '2025-01-30', 'resultado' => ''],
        ['local' => 'Real Madrid', 'visitante' => 'Barcelona', 'fecha' => '2025-01-15', 'resultado' => '3-0'],
    ];

    public function index(){
        $partidos = $this->partidos;
        return view('partidos.index', compact('partidos'));
    }

    public function show($id){
        $partido = $this->partidos[$id];
        return view('partidos.show', compact('partido'));
    }
}
