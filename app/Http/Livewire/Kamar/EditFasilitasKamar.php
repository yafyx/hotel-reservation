<?php

namespace App\Http\Livewire\Kamar;

use App\Models\FasilitasKamar;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditFasilitasKamar extends ModalComponent
{
    public $fasilitasKamarId, $namaFasilitas;

    protected $rules = [
        'namaFasilitas' => 'required|string',
    ];

    protected $messages = [];

    public function update($fasilitasKamarId)
    {
        $this->validate();
        $fasilitasKamar = FasilitasKamar::find($fasilitasKamarId);
        $fasilitasKamar->update([
            'nama_fasilitas' => $this->namaFasilitas,
        ]);

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);

        $this->dispatchBrowserEvent(
            'successEdit',
        );
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

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
        return view('livewire.kamar.edit-fasilitas-kamar');
    }
}
