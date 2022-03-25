<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    use HasFactory;
    protected $table = 'mis_propiedades';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable =[
        'duenio',
        'tipo_propiedad',
        'estado',
        'cantidad',
    ];
}
