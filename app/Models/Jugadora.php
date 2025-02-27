<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadora extends Model
{
    use HasFactory;

    public function equipo(){
        return $this->belongsTo(Equipo::class, 'equipos_id');
    }
}
