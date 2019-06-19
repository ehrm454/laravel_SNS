<?php

namespace App\Http\Middleware;

use Closure;

class after
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		$response = $next($request);
        echo 'after';
        return $response;
    }

}