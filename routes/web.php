<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KartuController as KartuController;

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
    return view('datang');
});

Route::get('kartu', [KartuController::class, 'index']);
Route::get('/form', function () {
    return view('form');
});
