<?php

namespace App\Http\Controllers\Tamu;

use App\Models\Kamar;
use App\Http\Controllers\Controller;
use App\Models\Reservasi;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BookingController extends Controller
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

        $kamars = Kamar::all();
        return view('home.booking', compact('tglCheckin', 'tglCheckout'), ['kamars' => $kamars]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = Validator::make(
            $request->all(),
            [
                'nama_pemesan' => 'required|string',
                'nama_tamu' => 'required|string',
                'email' => 'required|email:rfc,dns',
                'no_tlp' => 'required|numeric',
                'tipe_kamar' => 'required|string',
                'jumlah_kamar' => 'required|numeric',
                'tgl_checkin' => 'required',
                'tgl_checkout' => 'required',
            ],
            [
                'nama_pemesan.required' => 'Anda belum memasukkan nama pemesan',
                'nama_tamu.required' => 'Anda belum memasukkan nama tamu',
                'email.required' => 'Anda belum memasukkan email',
                'no_tlp.required' => 'Anda belum memasukkan nomor telepon',
                'tipe_kamar.required' => 'Anda belum memilih tipe kamar',
                'jumlah_kamar.required' => 'Anda belum memasukkan jumlah kamar',
                'tgl_checkin.required' => 'Anda belum memasukkan tanggal checkin',
                'tgl_checkout.required' => 'Anda belum memasukkan tanggal checkout',
            ]
        );

        if (!$validate->fails()) {
            $permintaanKhusus = $request->input('permintaan_khusus');
            $reservasi =  Reservasi::create([
                'uuid' => Str::uuid(),
                'nama_tamu' => $request->nama_tamu,
                'nama_pemesan' => $request->nama_pemesan,
                'email' => $request->email,
                'no_tlp' => $request->no_tlp,
                'id_kamar' => $request->tipe_kamar,
                'jumlah_kamar' => $request->jumlah_kamar,
                'permintaan_khusus' => json_encode($permintaanKhusus),
                'tgl_checkin' => Carbon::createFromDate($request->tgl_checkin),
                'tgl_checkout' => Carbon::createFromDate($request->tgl_checkout),
                'tipe_kamar' => $request->tipe_kamar,
            ]);
        } else {
            return redirect()->back()->withInput()
                ->withErrors($validate);
        }

        return redirect()->route('booking.show', $reservasi->uuid);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reservasi $reservasi)
    {
        //
    }


    public function unduhPDF($request)
    {
        $pdf = PDF::loadView('home.layouts.pdf.buktiReservasi', compact('reservasi'))->setPaper('a4', 'landscape')->output();
        return response()->streamDownload(
            fn () => print($pdf),
            "buktiReservasi.pdf"
        );
    }
}
