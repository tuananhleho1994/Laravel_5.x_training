<?php

namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
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
        if($request->input('age') == 200){
            echo "this is middleware: BeforeMiddleware";
            // return redirect('form/profileGet');
            return;
        }
        return $next($request);
    }
}
