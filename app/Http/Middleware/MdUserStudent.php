<?php

namespace App\Http\Middleware;

use Closure;

class MdUserStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $usuario_actual = \Auth::user();
      if($usuario_actual->tipo_usuario_id!=4){
        return redirect('/home')->with('msg_error','No tiene permisos.');
      }
      return $next($request);
    }
}
