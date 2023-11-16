<?php

use App\Http\Controllers\Mail\ContactController;
use App\Http\Controllers\ThankYouController;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::post('/wyslij', ContactController::class)->name('send.email');
Route::get('/dziekuje', ThankYouController::class)->name('thankYou');

// Route::get('/dziekuje', function () {
//     return view('ThankYou');
// })->name('thankYou');