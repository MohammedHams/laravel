<?php

use App\Http\Controllers\Mycontroller;
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

    return ('home');
});

Route::group(['prefix'=>'users'],function (){
    Route::get('/',[Mycontroller::class ,'Minefun'])->middleware('auth');
    Route::get('index',[Mycontroller::class ,'getIndex']);

});

Route::get('login',function (){
    return 'must Be Login';

})->name('login');
Route::resource('news','App\Http\Controllers\NewsController');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/redirect/{service}', [App\Http\Controllers\SocialController::class, 'redirect']);
Route::get('/callback/{service}', [App\Http\Controllers\SocialController::class, 'callback']);

Route::get('/fillable',[\App\Http\Controllers\TestController::class,'getTeachers']);
Route::group(['prefix'=>'Teachers'],function (){
    Route::get('/create',[\App\Http\Controllers\TestController::class,'create']);
    Route::post('/Store',[\App\Http\Controllers\TestController::class,'store']);
});
