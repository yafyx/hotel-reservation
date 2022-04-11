<?php

namespace App\Http\Livewire\Reservasi;

use App\Models\Reservasi;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditStatus extends ModalComponent
{
    public $reservasiId, $reservasiStatus;

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function cancel()
    {
        $this->closeModal();
    }

    public function update($reservasiId)
    {
        $this->validate([
            'reservasiStatus' => 'required',
        ]);

        $reservasi = Reservasi::find($reservasiId);
        $reservasi->update([
            'status' => $this->reservasiStatus,
        ]);

        $this->closeModal();

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);

        $this->dispatchBrowserEvent(
            'successEdit',
        );
    }

    public function render()
    {
        $reservasi = Reservasi::find($this->reservasiId);
        $status = Reservasi::select('status')->get();
        return view('livewire.reservasi.edit-status')->with('reservasi', $reservasi)->with('status', $status);
    }
}
