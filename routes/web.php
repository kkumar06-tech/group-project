<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewCont;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/userenter/{name}', function ($name) {
    return view('userenter',['name'=>$name]);
});

// Route::get('/enter/{name}', function ($name) {
    // return view('userenter',['name'=>$name]);
// });
// Route::redirect('/userenter/{name}','/enter/{name}');

Route::get('/nutzer',[NewCont::class,'getuser']);
Route::get('/anfang',[NewCont::class,'anfang']);
