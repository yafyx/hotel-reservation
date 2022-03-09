<?php

namespace App\Http\Livewire\Reservasi;

use App\Models\Reservasi;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteReservasi extends ModalComponent
{
    public ?int $reservasiId = null;
    public string $confirmationTitle = '';
    public string $confirmationDescription = '';

    public static function modalMaxWidth(): string
    {
        return 'md';
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
        return view('livewire.reservasi.delete-reservasi');
    }
}
