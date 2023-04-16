<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengeluaranController;


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
    return view('index');
});
Route::get('/dashboard', function () {
    return view('index');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/notifications', function () {
    return view('notifications');
});
Route::resource('/tables', PengeluaranController::class);