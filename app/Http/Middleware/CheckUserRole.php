<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
     /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  array  $roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        // Verificar si el usuario está autenticado y si su rol está permitido
        if ($user && in_array($user->rol_id, $roles)) {
            return $next($request);
        }

        // Redirigir o abortar si el rol no está permitido
        return redirect('/')->with('error', 'No tienes acceso a esta página.');
    }
}
