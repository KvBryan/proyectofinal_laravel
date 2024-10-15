<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depreciacion extends Model
{
    use HasFactory;
    protected $table = 'depreciacion';
    protected $primaryKey = 'id_depreciacion';
    protected $fillable = ['activo', 'fecha_depreciacion', 'valor_depreciado', 'valor_residual'];
}
