<?php

namespace App\Http\Livewire\Kamar;

use App\Models\FasilitasKamar;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteFasilitasKamar extends ModalComponent
{
    public $fasilitasKamarId, $namaFasilitas;
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
        $this->fasilitasKamarId;
        FasilitasKamar::query()->find($this->fasilitasKamarId)->delete();

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
        return view('livewire.kamar.delete-fasilitas-kamar');
    }
}
