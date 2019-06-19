<?php

namespace App\Http\Controllers\Util;

use Illuminate\Support\Facades\DB;

trait Data {
    public static function insertData($input,$data = '')
    {
      unset($result);
      if($data != ''){$result = $data;}
      foreach ($input as $key) {
        if(!isset($_POST[$key]) || $_POST[$key] == "" ) $result['empty'] = $key;
        $result[$key] = $_POST[$key];
      }
      return $result;
    }
    public static function updateData($input,$table,$id)
    {
      unset($result);
      $data = DB::table($table);
      foreach ($input as $key) {
        $data = $data->addSelect($key);
      }
      $data = $data->where('id',$id)->first();
      foreach (Util::insertData($input) as $key => $value) {
        if($data->$key != $value){
          $result[$key] = $value;
        }
      }
      if(!isset($result))return false;
      return $result;
    }
}
