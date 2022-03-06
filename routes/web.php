<?php

use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\KamarController;
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
    return view('/home/index');
});

Route::resource('/rooms', KamarController::class);
Route::resource('/facilities', FasilitasController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth:sanctum')->group(function () {
    Route::resources([
        '/kamar' => KamarController::class,
    ]);
});
