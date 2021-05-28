<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Encuesta;
use App\Models\Mesa;
use App\Models\User;
use App\Models\Menu;
use App\Models\Turno;
class Reserva extends Model
{
    use HasFactory;


    
    /* Relacion 1 a 1 entre Reserva y Encuesta */
    public function Encuesta(){
        /* $encuesta= Encuesta::where('user_id',$this->id)->first(); */
        return $this->hasOne(Encuesta::class);
    }


   
    /* relacion 1  a muchos de mesa con reserva (inversa) */
    public function Mesa(){
        return $this->belongsTo(Mesa::class);
    }

    /* relacion 1  a muchos de usuario con reserva (inversa) */
    public function User(){
        return $this->belongsTo(User::class);
    }
    /* relacion muchos  a muchos de reserva con menu */
    public function Menus(){
        return $this->belongsToMany(Menu::class);
    }

    /* relacion uno a muchos de estado con turno (inversa) */
    public function Turno(){
    return $this->belongsTo(Turno::class);
    }

}
