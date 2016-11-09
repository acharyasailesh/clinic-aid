<?php

namespace App\Http\Middleware;

use Closure;

class Thankyou
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
         $test=$request->input('name');

        if(isset($request['name'],$request['email'],$request['phoneNo'],$request['message'],$request['subject'])){
            return $next($request);
        }


        else
            return redirect()->route('home');
        
    }
}
