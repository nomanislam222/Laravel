<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class AdminMiddleware
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
        
        $email =Session::get('email');
        $id =Session::get('id');
        if( $email && $id ){

        return $next($request);
        }else{
            return redirect('/admin');
        }

    }
}
