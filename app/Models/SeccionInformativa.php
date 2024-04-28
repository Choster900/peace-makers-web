<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeccionInformativa extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'seccion_informativa';
    protected $primaryKey = 'id_seccion_informativa';
    public $timestamps = false;

    protected $fillable = [
        'id_tipo_seccion',
        'id_blog',
        'nombre_seccion_informativa',
        'contenido_seccion_informativa',
        'imagen_tipo_informacion',
        'fecha_creacion_seccion_informativa',
        'fecha_actualizacion_informativa',
        'usuario_seccion_informativa',
    ];
}
