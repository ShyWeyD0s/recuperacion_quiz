<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    protected $table = 'habitaciones';

    protected $fillable = ['tipo', 'hotel_id'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function agencias()
    {
        return $this->belongsToMany(Agencia::class, 'reserva_agencia');
    }

    public function particulares()
    {
        return $this->belongsToMany(Particular::class, 'reserva_particular');
    }
}
