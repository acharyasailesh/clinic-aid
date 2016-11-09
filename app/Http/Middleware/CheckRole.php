<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        if($request->user()==null){
            return redirect('login');
        }
            //return response("Cannot visit this page",401);
        ($actions=$request->route()->getAction());




        $roles=isset($actions['roles']) ? $actions['roles']:null;

        $test=$request->user()->hasAnyRole($roles);


        if(($request->user()->hasAnyRole($roles) )) {
            return $next($request);
        }

        return response("Insufficient Privileges",401);


    }
}
