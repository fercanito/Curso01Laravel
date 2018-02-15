<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoles
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
        $roles = func_get_args();
        //func_get_args() regresar en un array todos los parametros que llegan a una funcion
        //eliminar los dos primero valores del array
        $roles = array_splice($roles , 2);  
        
        if (auth()->user()->hasRoles($roles)) {

          return $next($request);

        }
              

        return redirect('/');
        
    }
}
