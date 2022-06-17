<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');

        $reservasi = Reservasi::query()
            ->where('booking_id', 'LIKE', "%{$search}%")
            ->first();

        if (empty($reservasi)) {
            return redirect()->back()->withErrors('Data tidak ditemukan');
        } else {
            return view('home.pdf.bookingDetail', compact('reservasi'));
        }
    }
}
