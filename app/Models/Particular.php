<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    use HasFactory;

    protected $table = 'particulares';

    protected $fillable = ['nombre', 'direccion', 'telefono'];

    public function habitaciones()
    {
        return $this->belongsToMany(Habitacion::class, 'reserva_particular');
    }
}
