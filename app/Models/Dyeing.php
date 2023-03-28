<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dyeing extends Model
{
    use HasFactory;
    
    public function doors()
    {
        return $this->hasMany(Door::class);
    }
}
