<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    // Forzar el nombre correcto de la tabla (plural irregular en español)
    protected $table = 'especialidades';

    protected $fillable = ['nombre', 'descripcion'];

    public function medicos()
    {
        return $this->hasMany(Medico::class, 'especialidad_id');
    }
}
