<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserinfoController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [UserinfoController::class, 'index']);
Route::get('/adduser', [UserinfoController::class, 'create']);
Route::post('/add-info', [UserinfoController::class, 'store'])->name('add-info');
Route::get('/delete/{id}', [UserinfoController::class, 'destroy']);

