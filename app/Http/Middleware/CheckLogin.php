<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    public function handle($request, Closure $next,$mode)
    {
        if(session()->has('user_cd') xor $mode){
			echo "<script>alert('이미로그인 됨');history.go(-1);</script>";
			exit();
		}
        return $next($request);
    }

}