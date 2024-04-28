<?php

namespace App\Http\Controllers;

use App\Models\SeccionInformativa;
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
                    'id_blog'                            => $value["id_blog"],
                    /* 'nombre_seccion_informativa'         => $value[""],
                    'contenido_seccion_informativa'      => $value[""],
                    'imagen_tipo_informacion'            => $value[""],
                    'fecha_creacion_seccion_informativa' => $value[""],
                    'fecha_actualizacion_informativa'    => $value[""],
                    'usuario_seccion_informativa'        => $value[""], */
                ]);
            } else {
                SeccionInformativa::insert([
                    'id_tipo_seccion'                    => 1,
                    'id_blog'                            => $value["id_blog"],
                    /*  'nombre_seccion_informativa'         => $value["id_blog"],
                    'contenido_seccion_informativa'      => $value[""],
                    'imagen_tipo_informacion'            => $value[""],
                    'fecha_creacion_seccion_informativa' => $value[""],
                    'fecha_actualizacion_informativa'    => $value[""],
                    'usuario_seccion_informativa'        => $value[""], */
                ]);
            }
        }

        return SeccionInformativa::where("id_blog", $request->arraySeccionInformativa[0]["id_blog"])->get();
        #return $request->arraySeccionInformativa[0]["id_blog"];
    }
    function updateSeccionInformativa(Request $request)
    {

        return SeccionInformativa::where("id_seccion_informativa", $request->id_seccion_informativa)->update([
            $request->campoActualizar                 => $request->valorEnviado
        ]);
    }
}
