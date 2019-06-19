<?php
namespace App\Http\Controllers\Users;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Util;
use Illuminate\Http\Request;

class Login
{
    public function __invoke(Request $request)
    {
        $ckeck = DB::table('sns_users')
			->where('login_id','=',$request->input('login_id'))
			->whereRaw('login_pw=MD5(\''.$request->input('login_pw').'\')')
			->count();
		if($ckeck == 1){
			$userInfo = DB::table('sns_users')
				->select('idx')
				->where('login_id','=',$request->input('login_id'))
				->whereRaw('login_pw=MD5(\''.$request->input('login_pw').'\')')
				->first();
			session()->put('user_cd',$userInfo->idx);
		}
		echo session()->get('user_cd');
    return;
  }
}
