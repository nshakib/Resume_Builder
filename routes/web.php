<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-10-26 19:28:54
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-10-26 21:54:26
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicInfoController;
use App\Http\Controllers\EducationController;

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

Route::get('/home', [BasicInfoController::class,'create'])->name('home');

//basic info

Route::post('store', [BasicInfoController::class, 'store'])->name('basic.store');
//Route::get('/basic', [BasicInfoController::class, 'index'])->name('index');

//Route::get('/basic', [BasicInfoController::class, 'create'])->name('create');
//education
Route::get('/education/create', [EducationController::class, 'create'])->name('education.create');
// certificate
Route::get('/certificate', [CertificateController::class, 'create'])->name('create');
//work
Route::get('/work', [WorkController::class, 'create'])->name('create');
//career object
Route::get('/career', [CareerObjectController::class, 'create'])->name('create');

//pdf
Route::get('/pdf', [BasicInfoController::class, 'create'])->name('create');
