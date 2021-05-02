<?php

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

Route::get('/plag', function(){
    return view('plag');
});
Route::get('/plagmain', function(){
    return view('plagmain');
});

Route::get('/forgetpass', function() {
    return view('forgetpass');
});
Route::post('/check', 'Plagiarism@check')->name('check');

Route::get('profile', 'Plagiarism@datalist');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');