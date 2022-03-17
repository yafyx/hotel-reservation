<?php

namespace App\Http\Controllers\Tamu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tglCheckin = $request->input('tgl_checkin');
        $tglCheckout = $request->input('tgl_checkout');

        return view('livewire.booking.booking', compact('tglCheckin', 'tglCheckout'));
    }
}
