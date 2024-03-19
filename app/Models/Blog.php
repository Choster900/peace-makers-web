<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'id_blog';
    public $timestamps = false;

    protected $fillable = [
        'id_blog',
        'id_seccion_informativa',
        'id_galeria',
        'id_involucrados',
        'id_categoria_blog',
        'titulo_blog',
        'descripcion_blog',
        'foto_principal_blog',
        'contenido_descripcion_blog',
        'numero_visitas_blog',
        'fecha_reflejada_blog',
        'estado_blog',
        'fecha_creacion_blog',
        'fecha_actualizacion_blog',
        'usuario_blog',
    ];
}
