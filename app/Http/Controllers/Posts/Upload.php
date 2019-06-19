<?php
namespace App\Http\Controllers\Posts;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Util;
use Illuminate\Http\Request;
use App\Http\Controllers\Util\Data;

class Upload
{
    public function __invoke(Request $request)
    {
		$formList = ['title', 'content'];
		$insertData = [];
		
		if($request->hasFile('image')){
			$formList[2] = 'image';
			$insertData['image_cd'] = '';
			echo $_FILES['image']['name'];
			echo '<br>';
			echo $request->file('image')->path();
			exit();
		}
		if(!$request->only($formList))return "<script>alert('업로드 오류');location=document.referrer;</script>";
		$insertData = Data::insertData($formList,$insertData);
		if(isset($insertData['empty']))return "<script>alert('입력 오류 확인해라');location=document.referrer;</script>";
		$insertData['user_cd'] = session()->get('user_cd');
		$insertData['post_date'] = time();
		DB::table('sns_posts')->insert($insertData);
		return "<script>alert('업로드 됨');location=document.referrer;</script>";
    }
}
