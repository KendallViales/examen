<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    protected $table = 'juegos';

    public function apuestas()
    {
        return $this->hasMany(Apuesta::class, 'id_juego');
    }
}
