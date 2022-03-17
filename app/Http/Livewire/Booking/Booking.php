<?php

namespace App\Http\Livewire\Booking;

use App\Models\Kamar;
use App\Models\Reservasi;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class Booking extends Component
{
    public $nama_tamu, $nama_pemesan, $no_tlp, $email, $tipe_kamar, $jumlah_kamar, $tglCheckin, $tglCheckout;

    protected $rules = [
        'nama_tamu' => 'required',
        'nama_pemesan' => 'required',
        'no_tlp' => 'required',
        'email' => 'required',
        'tipe_kamar' => 'required',
        'jumlah_kamar' => 'required',
        'tgl_checkin' => 'required',
        'tgl_checkout' => 'required',
    ];

    protected $messages = [
        'nama_tamu.required' => 'Nama Tamu tidak boleh kosong',
        'nama_pemesan.required' => 'Nama Pemesan tidak boleh kosong',
        'no_tlp.required' => 'No Telepon tidak boleh kosong',
        'email.required' => 'Email tidak boleh kosong',
        'tipe_kamar.required' => 'Tipe Kamar tidak boleh kosong',
        'jumlah_kamar.required' => 'Jumlah Kamar tidak boleh kosong',
        'tgl_checkin.required' => 'Tanggal Checkin tidak boleh kosong',
        'tgl_checkout.required' => 'Tanggal Checkout tidak boleh kosong',
    ];

    public function store()
    {
        $this->validate();
        $reservasi = Reservasi::create([
            'booking_id' => date('YmdHis') . $this->tipe_kamar,
            'nama_tamu' => $this->nama_tamu,
            'nama_pemesan' => $this->nama_pemesan,
            'email' => $this->email,
            'no_tlp' => $this->no_tlp,
            'id_kamar' => $this->tipe_kamar,
            'jumlah_kamar' => $this->jumlah_kamar,
            'tgl_checkin' => $this->tgl_checkin,
            'tgl_checkout' => $this->tgl_checkout,
        ]);

        return $this->unduhPDF($reservasi);
    }

    public function unduhPDF($reservasi)
    {
        $pdf = PDF::loadView('home.layouts.pdf.buktiReservasi', compact('reservasi'))->setPaper('a4', 'landscape')->output();
        return response()->streamDownload(
            fn () => print($pdf),
            "buktiReservasi.pdf"
        );
    }

    public function render()
    {
        $reservasis = Reservasi::all();
        $kamars = Kamar::all();
        return view('livewire.booking.booking', ['reservasis' => $reservasis, 'kamars' => $kamars]);
    }
}
