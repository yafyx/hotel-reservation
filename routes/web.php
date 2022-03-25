<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Tamu\BookingController;
use App\Http\Controllers\Tamu\ViewController;
use App\Http\Livewire\Fasilitas\FasilitasC;
use App\Http\Livewire\Kamar\FasilitasKamar;
use App\Http\Livewire\Kamar\TipeKamar;
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

Route::post('/login', LoginController::class);

Route::get('/', function () {
    return view('/home.index');
});

Route::resource('/booking', BookingController::class);

Route::get('/booking/{uuid}/unduhPDF', [BookingController::class, 'unduhPDF'])->name('booking.unduhPDF');

Route::get('/rooms', [ViewController::class, 'roomIndex'])->name('rooms');
Route::get('/facilities', [ViewController::class, 'facilitiesIndex'])->name('facilities');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/dashboard', function () {
        return view('/dashboard');
    })->name('dashboard');

    Route::middleware('CheckRole:rsp')->name('rsp.')->prefix('rsp')->group(function () {
        Route::get('/reservasi', ReservasiC::class)->name('reservasi');
    });

    Route::middleware('CheckRole:admin')->name('admin.')->prefix('admin')->group(function () {
        Route::get('/kamar/tipe', TipeKamar::class)->name('kamar.tipe');
        Route::get('/kamar/fasilitas', FasilitasKamar::class)->name('kamar.fasilitas');
        Route::get('/fasilitas', FasilitasC::class)->name('fasilitas');
    });
});

Route::get('/buktiReservasi', function () {
    return view('/home.layouts.pdf.buktiReservasi');
});
