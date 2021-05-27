<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;

class Mesa extends Model
{
    use HasFactory;

    /* relacion 1  a muchos de mesa con reserva */
    public function Reservas(){
        return $this->hasMany(Reserva::class);
    }
}
