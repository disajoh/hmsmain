<?php

namespace App\Http\Middleware;

use Closure;
use Flash;
use Auth;

class CheckAdmin
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
        if(Auth::user()->role_id != 1){

            Flash::error('Sorry, the resource you are trying to access is not available to you.');
            return redirect('/home');
        }
        return $next($request);
    }
}
