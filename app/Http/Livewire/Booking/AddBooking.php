<?php

namespace App\Http\Livewire\Booking;

use App\Models\Kamar;
use Livewire\Component;
use Illuminate\Http\Request;

class AddBooking extends Component
{
    public $nama_tamu, $nama_pemesan, $no_tlp, $email, $tipe_kamar, $jumlah_kamar, $tgl_checkin, $tgl_checkout;


    protected $listeners = ['postAdded' => 'incrementPostCount'];

    public function incrementPostCount()
    {
        return dd('post added');
    }

    public function render()
    {
        $kamars = Kamar::all();
        return view('livewire.booking.add-booking',  ['kamars' => $kamars])
            ->extends('home.layouts.app');
    }
}
