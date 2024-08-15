<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\SeccionInformativa;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionInformativaController extends Controller
{
    //
    function inserSeccionInformativa(Request $request)
    {

        foreach ($request["arraySeccionInformativa"] as $key => $value) {
            if (!empty($value["id_seccion_informativa"])) {
                SeccionInformativa::where("id_seccion_informativa", $value["id_seccion_informativa"])->update([
                    'id_tipo_seccion'                    => 1,
                    'id_blog'                            => $request->idBlog,
                    'fecha_creacion_seccion_informativa' => Carbon::now(),
                ]);
            } else {
                SeccionInformativa::insert([
                    'id_tipo_seccion'                    => 1,
                    'id_blog'                            => $request->idBlog,
                    'fecha_creacion_seccion_informativa' => Carbon::now(),
                ]);
            }
        }

        return SeccionInformativa::where("id_blog", $request->idBlog)->get();
    }
    function updateSeccionInformativa(Request $request)
    {

        return SeccionInformativa::where("id_seccion_informativa", $request->id_seccion_informativa)->update([
            $request->campoActualizar                 => $request->valorEnviado,
            'fecha_creacion_seccion_informativa' => Carbon::now(),

        ]);
    }
    function updateBlog(Request $request)
    {

        return Blog::where("id_blog", $request->id_blog)->update([
            $request->campoActualizar                 => $request->valorEnviado
        ]);
    }
}
