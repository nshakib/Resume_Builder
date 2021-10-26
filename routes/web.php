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
    return view('index');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/home', 'BasicInfoController@create')->name('home');

//basic info
Route::get('/basic',[BasicInfoController::class,'index'])->name('index');
Route::get('/basic',[BasicInfoController::class,'create'])->name('create');
//education
Route::get('/education',[EducationController::class,'create'])->name('create');
// certificate
Route::get('/certificate',[CertificateController::class,'create'])->name('create');
//work
Route::get('/work',[WorkController::class,'create'])->name('create');
//career object
Route::get('/career',[CareerObjectController::class,'create'])->name('create');

//pdf
Route::get('/pdf',[BasicInfoController::class,'create'])->name('create');