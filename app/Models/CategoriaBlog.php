<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaBlog extends Model
{
    use HasFactory;

    protected $table = 'categoria_blog';
    protected $primaryKey = 'id_categoria';
    public $timestamps = false;

    protected $fillable = [
        'nombre_categoria',
        'descripcion_categoria',
        'fecha_creacion_categoria',
        'fecha_actualizacion_categoria',
        'usuario_categoria_blog',
    ];
}
