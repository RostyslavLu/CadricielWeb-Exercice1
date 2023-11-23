<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [ResumeController::class,'index'])->name('home');
Route::get('/competences', [ResumeController::class,'competences'])->name('competences');
Route::get('/formation', [ResumeController::class,'formation'])->name('formation');
Route::get('/experiences', [ResumeController::class,'experiences'])->name('experiences');
Route::get('/contact', [ResumeController::class,'contact'])->name('contact');
Route::post('/contact', [ResumeController::class,'message'])->name('contact');
