<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategoriaBlog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    function addNewBlog(Request $request)
    {

        # code...
        $file = $request->file("blogFile");

        $name = $file->getClientOriginalName();
        // Generar un nombre único para el archivo
        $currentTimestamp = time();
        $nameFile = date('Y-m-d His', $currentTimestamp) . '.' . $file->getClientOriginalExtension();
        // Almacenar el archivo en el directorio 'imagenes' dentro del disco 'public'
        $file->storeAs('blogsImages', $name, 'public');
        // Generar la URL completa para el archivo almacenado
        $imagePath = '/storage/blogsImages/' . $name; // Asegúrate de que la ruta sea correcta según la configuración de tu sistema de archivos



        $blogId = Blog::insertGetId([
            'titulo_blog'                => $request->tituloBlog,
            'id_categoria_blog'               => $request->idCategory,
            'descripcion_blog'           => $request->descriptionBlog,
            'foto_principal_blog'        => $imagePath,
            'contenido_descripcion_blog' => '',
            'numero_visitas_blog'        => 0,
            'fecha_reflejada_blog'       => Carbon::now(),
            'estado_blog'                => 1,
            'fecha_creacion_blog'        => Carbon::now(),
            'usuario_blog'               => 1, // TODO : Por default se dejara 1 (en el futuro poner el id del usuario que agrega)

        ]);

        return  $blogId;


    }



    function getCategoriesBlog()
    {
        return CategoriaBlog::all();
    }
}
