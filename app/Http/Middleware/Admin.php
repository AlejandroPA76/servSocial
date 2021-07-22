<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        switch(auth::user()->tipo) {
            case '1':
                return redirect('jefe'); 
                break;
            
            case '2':
                return $next($request); //si es administrador lo lleva al home
                break;

            case '3':
                return redirect('usuario');
                break;
        }
    }
}
