<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnology extends Model
{
    use HasFactory;

     // definiamo il rapporto many to many con type
     public function types(){
        return $this->belongsToMany(Type::class);
    }
}
