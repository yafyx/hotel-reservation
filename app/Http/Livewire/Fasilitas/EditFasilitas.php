<?php

namespace App\Http\Livewire\Fasilitas;

use App\Models\Fasilitas;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditFasilitas extends ModalComponent
{
    public $fasilitasId, $namaFasilitas, $gambar;

    protected $rules = [];

    protected $messages = [];

    public function update($fasilitasId)
    {
        $this->validate();
        $fasilitas = Fasilitas::find($fasilitasId);
        $fasilitas->update([
            'tipe_kamar' => $this->tipeKamar,
            'fasilitas' => $this->fasilitas,
            'gambar' => $this->gambar,
            'jumlah_kamar' => $this->jumlahKamar,
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
        $fasilitas = Fasilitas::find($this->fasilitasId);
        return view('livewire.fasilitas.edit-fasilitas', ['fasilitas' => $fasilitas]);
    }
}
