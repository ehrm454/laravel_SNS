<?php
namespace App\Http\Controllers\Posts;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Util;
use Illuminate\Http\Request;
use App\Http\Controllers\Util\Data;

class View
{
	public function main(Request $request){
		$result = view('layout.default');
		$result -> Posts = DB::table('sns_posts')
			->join('sns_users','sns_users.idx','=','sns_posts.user_cd')
			->orderByRaw('rand()')
			->get();
		$result -> page = 'home';
		//print_r($result -> Posts);
		//exit();
		return $result;
	}
}
