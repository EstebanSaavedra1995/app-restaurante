<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;

class Turno extends Model
{
    use HasFactory;

    /* Relacion 1 a muchos entre turno y reserva */
    public function Reservas(){
        return $this->hasMany(Reserva::class);
    }
    return "jhfsdhjfkjs";
}
