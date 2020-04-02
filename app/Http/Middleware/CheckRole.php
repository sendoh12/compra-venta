<?php

namespace App\Http\Middleware;
use App\Http\Requests\User_validation;
use Closure;

class CheckRole
{
    /**
     * Handlecoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next an in
     * @return mixed
     */
    public function handle($request, Closure $next,$rol)
    {
        var_dump($rol);
        if ($request->role == 4) {
            var_dump($request->role);
            die;
            return redirect('/principal');
        }
        Var_dump($request->input('role'));
        die;
        return $next($request);
    }
}
