<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'nacimiento',
        'genero',
        'estadocivil',
        'provincia',
        'localidad',
        'email',
        'telefono'
    ];
}
