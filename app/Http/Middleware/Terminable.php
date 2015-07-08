<?php

namespace App\Http\Middleware;

use Closure;

class Terminable
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
            echo "This is action handle, in middleware: Terminable";
            // return redirect('form/profileGet');
            // return;
        }else {
            return $next($request);
        }
    }

    public function terminate($request, $response){
        echo "This is action terminate, in middleware: Terminable";
    }
}
