<?php

namespace App\Http\Livewire\Reservasi;

use App\Models\Reservasi;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DetailReservasi extends ModalComponent
{
    public ?int $reservasiId = null;
    public string $reservasiNama = '';
    //resevasiTipeKamar
    public string $reservasiTipeKamar = '';
    public string $reservasiTgl = '';
    public string $reservasiCheckin = '';
    public string $reservasiCheckout = '';
    public string $reservasiStatus = '';

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function cancel()
    {
        $this->closeModal();
    }

    public function render()
    {
        $reservasi = Reservasi::find($this->reservasiId);
        return view('livewire.reservasi.detail-reservasi')->with('reservasi', $reservasi);
    }
}
