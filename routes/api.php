<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlluserController;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/test',function(){

return ['name'=>"keshav kumar"];

});

//Route::get('/allusers',[AlluserController::class,'list']);
Route::apiResource('/userall', AlluserController::class);

Route::post('/addstudent',[StudentController::class,'add_student']);
