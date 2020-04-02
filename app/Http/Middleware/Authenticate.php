<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    public function handle($request, Closure $next, $guard = null)
    {

        // si la persona no inició sesión, entonces ....
        // if (Auth::guard($guard)->guest()) {

        //     if ($request->ajax() || $request->wantsJson()) {

        //         return response('Unauthorized.', 401);

        //     } else {

        //         // si la persona no inició sesión y no es una solicitud ajax
        //         // enviar al formulario de ingreso
        //         $sesion = Session::has('users');
        //         var_dump($sesion);
        //         die();
        //         return redirect()->guest('login');

        //     }
        // }

        return $next($request);
    }
}
