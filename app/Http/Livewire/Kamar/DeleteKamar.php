<?php

namespace App\Http\Livewire\Kamar;

use App\Models\Kamar;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteKamar extends ModalComponent
{
    public $kamarId, $tipeKamar, $fasilitas, $gambar, $jumlahKamar;
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
        $this->kamarId;
        Kamar::query()->find($this->kamarId)->delete();

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
        return view('livewire.kamar.delete-kamar');
    }
}
