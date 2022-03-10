<?php

namespace App\Http\Livewire\Reservasi;

use App\Models\Reservasi;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteReservasi extends ModalComponent
{
    public ?int $reservasiId = null;
    public string $reservasiNama = '';
    //resevasiTipeKamar
    public string $reservasiTipeKamar = '';
    public string $reservasiTgl = '';
    public string $reservasiCheckin = '';
    public string $reservasiCheckout = '';
    public string $reservasiStatus = '';
    public string $confirmationTitle = '';
    public string $confirmationDescription = '';

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function cancel()
    {
        $this->closeModal();
    }

    public function confirm()
    {
        $this->reservasiId;
        Reservasi::query()->find($this->reservasiId)->delete();

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);

        $this->dispatchBrowserEvent(
            'successDelete',
        );
    }

    public function render()
    {
        return view('livewire.reservasi.delete-reservasi')->with(['GetTamu', 'GetKamar']);
    }
}
