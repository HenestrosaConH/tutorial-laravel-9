<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    
    // Es la whitelist de registros que se pueden introducir con el método create() del modelo
    protected $fillable = [
        'nombre_articulo',
        'precio',
        'pais_origen',
        'observaciones',
        'seccion'
    ];

    // Es la blacklist de registros que NO se pueden introducir con el método create() del modelo
    protected $guarded = [
        'id'
    ];
}
