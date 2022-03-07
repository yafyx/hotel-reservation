<?php

use App\Http\Controllers\Resepsionis\ReservasiController;
use App\Http\Controllers\Tamu\ViewController;
use App\Http\Livewire\FasilitasTable;
use App\Http\Livewire\KamarTable;
use App\Http\Livewire\Reservasi\ReservasiC;
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
Route::get('/rooms', [ViewController::class, 'roomIndex'])->name('rooms');
Route::get('/facilities', [ViewController::class, 'facilitiesIndex'])->name('facilities');

Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::middleware('auth:sanctum')->name('rsp.')->prefix('rsp')->group(function () {
        Route::get('/reservasi', ReservasiC::class)->name('reservasi');
    });
});

Route::group(['auth' => 'isAdmin'], function () {
    Route::middleware('auth:sanctum')->name('admin.')->prefix('admin')->group(function () {
        Route::get('/kamar', KamarTable::class)->name('kamar');
        Route::get('/fasilitas', FasilitasTable::class)->name('fasilitas');
    });
});
