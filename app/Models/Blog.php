<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'id_blog';
    public $timestamps = false;

    protected $fillable = [
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

    /**
     * Get all of the secciones_informativas for the Blog
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function secciones_informativas(): HasMany
    {
        return $this->hasMany(SeccionInformativa ::class, 'id_blog', 'id_blog');
    }
}
