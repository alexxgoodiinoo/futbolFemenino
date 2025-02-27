<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'estadio_id', 'titulos', 'escudo'];
    protected $table = 'equipos';

    public function estadio(){
        return $this->belongsTo(Estadio::class);
    }

    public function jugadoras(){
        return $this->hasMany(Jugadora::class);
    }
}
