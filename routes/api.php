<?php

use App\Http\Controllers\Hellocontroller;
use App\Http\Controllers\StuController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello',[Hellocontroller::class,'sayhello']);

Route::resource('/stu',StuController::class);

Route::resource('/student',StudentController::class);


