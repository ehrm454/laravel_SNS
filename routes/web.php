<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test','SNS\Test@test');