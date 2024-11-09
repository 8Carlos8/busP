<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autobus extends Model
{
    use HasFactory;

    protected $fillable =[
        'numero_autobus',
        'linea',
        'capacidad',
        'servicios',
        'num_incidencia',
    ];
}
