<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Encuesta extends Model
{
    use HasFactory;

    
    public function User(){
        /* $encuesta= Encuesta::where('user_id',$this->id)->first(); */
        return $this->belongsTo(User::class);
    }
}
