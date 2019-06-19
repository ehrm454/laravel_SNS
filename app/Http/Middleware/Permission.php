<?php

namespace App\Http\Middleware;

use Closure;

class Permission
{
    public function handle($request, Closure $next)
    {
        if(session()->has('user_cd')){
			echo "<script>alert('이미로그인 됨');history.go(-1);</script>";
			exit();
		}
        return $next($request);
    }

}