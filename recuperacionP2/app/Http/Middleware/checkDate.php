<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use app\Ḩttp\Models\User;
use app\Http\Controllers\UserController;

class checkDate
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $cont=0;
        $Users= User::all();
        for ($i=0; $i < Users.length; $i++) { 
            if($user->fechaNacimiento<"2016-05-15"){
                $cont++;
            }
        }
        if($cont<10){
            abort(403, 'No hay suficientes');
        }
        return $next($request);
    }
}
