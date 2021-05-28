<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sancion extends Model
{
    use HasFactory;

    /* relacion 1  a muchos de sancion con user (inversa) */
    public function User(){
        return $this->belongsTo(User::class);
    }
}
