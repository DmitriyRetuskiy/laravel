<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Middleware;

$midlleware = new  Middleware\Person;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controllers\UserController::class,'index']);


Route::get('/falcon', [Controllers\UserController::class,'falconTemplate'])->name('template');

Route::get('/redis', [Controllers\UserController::class,'redisShow'])->name('redis.show')->middleware('person');

Route::group(['prefix' => 'mail'], function (){
//    Route::get('/', [Controllers\UserController::class, 'mailForm'])->name('mail.form');
    Route::get('/', [Controllers\UserController::class, 'mail'])->name('mail');
});

Route::get('/first-or-create', [Controllers\UserController::class,'firstOrCreate'])->name('firstOrCreate');

Route::resource('post',Controllers\PostController::class);

Route::get('/add-numbers',[Controllers\UserController::class,'addNumbers'])->name('addNumbers');

Route::get('/check-file',[Controllers\UserController::class,'checkFile'])->name('check.file');
