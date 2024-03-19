<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function addNewBlog()
    {
        return Blog::insert([
            //'id_seccion_informativa'     => '',
            //'id_galeria'                 => '',
            //'id_involucrados'            => '',
            //'id_categoria_blog'          => '',
            'titulo_blog'                => '',
            'descripcion_blog'           => '',
            'foto_principal_blog'        => '',
            'contenido_descripcion_blog' => '',
            'numero_visitas_blog'        => 0,
            'fecha_reflejada_blog'       => Carbon::now(),
            'estado_blog'                => 1,
            'fecha_creacion_blog'        => Carbon::now(),
            'usuario_blog'               => 1, // TODO : Por default se dejara 1 (en el futuro poner el id del usuario que agrega)

        ]);
    }
}
