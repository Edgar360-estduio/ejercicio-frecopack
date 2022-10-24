<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('users',UserController::class)->names('users');
// Route::get('users',[UserController::class,'index'])->names('users.index');
// Route::post('users/cretae',[UserController::class,'create'])->names('users.create');
// Route::get('users',[UserController::class,'index'])->names('users.index');
// Route::get('users',[UserController::class,'index'])->names('users.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
