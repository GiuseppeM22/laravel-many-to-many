<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function portfolio(){
        return $this->hasMany(Portfolio::class);
    }

    // definiamo il rapporto many to many con tecnology
    public function tecnologies(){
        return $this->belongsToMany(Tecnology::class);
    }
}
