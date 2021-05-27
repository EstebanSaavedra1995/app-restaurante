<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;

class Menu extends Model
{
    use HasFactory;

    /* relacion muchos  a muchos de reserva con menu */
    public function Reservas(){
        return $this->belongsToMany(Reserva::class);
    }
}
