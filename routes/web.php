<?php
Route::get('/','Posts\View@main');
Route::post('/login','Users\Login');
Route::group(['middleware' => 'checkLogin:0'], function () {
	Route::view('/login','layout.default',['page'=>'login']);
});
Route::group(['middleware' => 'checkLogin:1'], function () {
	Route::post('/uploadPost','Posts\Upload');
});