<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'Alumno'; // Nombre de la tabla

    protected $fillable = [
        'name',
        'email',
    ];

    public function notas()
    {
        return $this->hasMany(Nota::class, 'alumno_id');
    }
}
