<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;

class Estado extends Model
{
    use HasFactory;

    /* relacion uno a muchos de encuesta con reserva */
    public function Reservas(){
        return $this->hasMany(Reserva::class);
    }

}
