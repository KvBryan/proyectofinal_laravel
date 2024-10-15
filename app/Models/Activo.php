<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;
    protected $table = 'activos';
    protected $primaryKey = 'id_activo';
    protected $fillable = ['nombre', 'descripcion', 'valor_inicial', 'fecha_adquisicion', 'categoria'];
}
