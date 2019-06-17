<?php

namespace App\Http\Controllers\SNS;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Test extends Controller
{
  public function test()
  {
    $test = DB::Table( DB::raw('dual') )->selectRaw('1234')->get();
    print_r($test);
    return;
  }
}
