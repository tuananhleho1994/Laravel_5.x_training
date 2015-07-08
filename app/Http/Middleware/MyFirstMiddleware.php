<?php

namespace App\Http\Middleware;

use Closure;

class MyFirstMiddleware
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
            echo "this is middleware old";
            return redirect('form/profileGet');
        }
        return $next($request);
    }
}
