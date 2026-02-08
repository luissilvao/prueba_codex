<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';

    protected $fillable = [
        'placa',
        'tipo',
        'marca',
        'color',
        'propietario',
        'telefono',
        'hora_entrada',
        'hora_salida',
        'observaciones',
    ];

    protected $casts = [
        'hora_entrada' => 'datetime',
        'hora_salida' => 'datetime',
    ];
}
