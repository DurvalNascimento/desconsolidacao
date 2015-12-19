<?php

namespace App\Http\Middleware;

use Closure;

class admin
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


           

                    if(\Auth::user()->nivelAccess <> 1 )
                    {
                        return redirect('/menuagente');
                    }

        return $next($request);
    }

    


}
