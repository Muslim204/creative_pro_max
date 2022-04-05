<?php

use App\Http\Controllers\backend\BannarController;
use App\Http\Controllers\backend\LeadController;
use App\Http\Controllers\backend\SeminarController;
use App\Http\Controllers\frontend\FronntendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/' , [FronntendController::class,'home'])->name('home');
Auth::routes();

// frontend page route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// dashboard route goes here
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

//status route goes here
Route::GET('/status/{id}',[BannarController::class,'status'])->name('bannar.status');
// bannar routes goes here
Route::GET('/trash' , [BannarController::class,'trashbannar'])->name('bannar.trash');
Route::GET('/trash/restore/bannar/{id}' , [BannarController::class,'restorebannar'])->name('restore.bannar');
Route::DELETE('/bannar_parmanent_delete/{id}' , [BannarController::class,'bannar_parmanent_delete'])->name('parmanent.bannar.delete');
Route::resource('/bannar', BannarController::class);
// seminar route goes here
Route::GET('/joiningseminar', [SeminarController::class,'joinseminar'])->name('seminar.join');
Route::resource('/seminar', SeminarController::class);
Route::resource('/lead', LeadController::class);


