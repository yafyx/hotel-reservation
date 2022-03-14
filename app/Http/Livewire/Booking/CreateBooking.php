<?php

namespace App\Http\Livewire\Booking;

use App\Models\Kamar;
use App\Models\Reservasi;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateBooking extends ModalComponent
{
    public $nama_tamu, $nama_pemesan, $no_tlp, $email, $tipe_kamar, $jumlah_kamar, $tgl_checkin, $tgl_checkout;

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }

    public function store()
    {
        $this->validate([
            'nama_tamu' => 'required',
            'nama_pemesan' => 'required',
            'no_tlp' => 'required',
            'email' => 'required',
            'tipe_kamar' => 'required',
            'jumlah_kamar' => 'required',
            'tgl_checkin' => 'required',
            'tgl_checkout' => 'required',
        ]);

        Reservasi::create([
            'nama_tamu' => $this->nama_tamu,
            'nama_pemesan' => $this->nama_pemesan,
            'email' => $this->email,
            'no_tlp' => $this->no_tlp,
            'id_kamar' => $this->tipe_kamar,
            'jumlah_kamar' => $this->jumlah_kamar,
            'tgl_checkin' => $this->tgl_checkin,
            'tgl_checkout' => $this->tgl_checkout,
        ]);
    }

    public function cancel()
    {
        $this->closeModal();
    }

    public function render()
    {
        $reservasis = Reservasi::all();
        $kamars = Kamar::all();
        return view('livewire.booking.create-booking', ['reservasis' => $reservasis, 'kamars' => $kamars]);
    }
}
