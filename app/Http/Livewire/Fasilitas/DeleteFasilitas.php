<?php

namespace App\Http\Livewire\Fasilitas;

use App\Models\Fasilitas;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteFasilitas extends ModalComponent
{
    public $fasilitasId, $namaFasilitas, $gambar;
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

    public function confirm()
    {
        $this->fasilitasId;
        Fasilitas::query()->find($this->fasilitasId)->delete();

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);

        $this->dispatchBrowserEvent(
            'successDelete',
        );
    }

    public function cancel()
    {
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.fasilitas.delete-fasilitas');
    }
}
