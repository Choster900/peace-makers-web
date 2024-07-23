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
            'id_categoria_blog'          => $request->idCategory,
            'descripcion_blog'           => $request->descriptionBlog,
            'foto_principal_blog'        => $imagePath,
            'contenido_descripcion_blog' => '',
            'numero_visitas_blog'        => 0,
            'fecha_reflejada_blog'       => Carbon::now(),
            'estado_blog'                => 1,
            'fecha_creacion_blog'        => Carbon::now(),
            'usuario_blog'               => 1, // TODO : Por default se dejara 1 (en el futuro poner el id del usuario que agrega)

        ]);

        return $blogId;
    }


    public function updateBlog(Request $request)
    {
        /*   $data = $request->validate([
            'blog.id_blog'           => 'required|integer',
            'blog.titulo_blog'       => 'required|string|max:255',
            'blog.id_categoria_blog' => 'required|integer',
            'blog.descripcion_blog'  => 'nullable|string',
        ]); */

        $blog = Blog::findOrFail($request->blog['id_blog']);

        $imagePath = $blog->foto_principal_blog; // Valor por defecto si no se proporciona una nueva imagen

        if ($request->hasFile('fileInput')) {
            $file = $request->file('fileInput');
            $name = $file->getClientOriginalName();
            $currentTimestamp = time();
            $nameFile = date('Y-m-d His', $currentTimestamp) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('blogsImages', $nameFile, 'public');
            $imagePath = '/storage/blogsImages/' . $nameFile;
        }

        $blog->update([
            'titulo_blog'          => $request->blog['titulo_blog'],
            'id_categoria_blog'    => $request->blog['id_categoria_blog'],
            'descripcion_blog'     => $request->blog['descripcion_blog'],
            'foto_principal_blog'  => $imagePath,
            'fecha_reflejada_blog' => Carbon::now(),
            'estado_blog'          => 1,
            'fecha_creacion_blog'  => Carbon::now(),
            'usuario_blog'         => 1, // TODO: En el futuro, poner el id del usuario que agrega
        ]);

        return response()->json(['message' => 'Blog actualizado correctamente', 'blog' => $blog], 200);
    }



    function getCategoriesBlog()
    {
        return CategoriaBlog::all();
    }
}
