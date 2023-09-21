<?php

use App\Http\Controllers\SurveyController;
use App\Models\Survey;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/survey')->group(function(){
    Route::get('/home',[SurveyController::class,'home']);
    Route::get('/answer',[SurveyController::class,'answer']);
    Route::post('/store',[SurveyController::class,'store']);
    Route::get('/thanks',[SurveyController::class,'thanks']);
});

Route::prefix('/admin')->group(function(){
    Route::get('/index',[SurveyController::class,'index']);
});