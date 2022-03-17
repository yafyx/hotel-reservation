<?php

namespace App\Http\Livewire\Kamar;

use App\Models\Kamar;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditKamar extends ModalComponent
{
    public $kamarId, $tipeKamar, $fasilitas, $gambar, $jumlahKamar;

    protected $rules = [
        'tipeKamar' => 'required',
        'fasilitas' => 'required',
        'gambar' => 'required',
        'jumlahKamar' => 'required|numeric',
    ];

    protected $messages = [
        'tipeKamar.required' => 'Tipe Kamar harus diisi',
        'fasilitas.required' => 'Fasilitas harus diisi',
        'gambar.required' => 'Gambar harus diisi',
        'jumlahKamar.required' => 'Jumlah Kamar harus diisi',
        'jumlahKamar.numeric' => 'Jumlah Kamar harus berupa angka',
    ];

    public function update($kamarId)
    {
        $this->validate();
        $kamar = Kamar::find($kamarId);
        $kamar->update([
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
        $kamar = Kamar::find($this->kamarId);
        return view('livewire.kamar.edit-kamar', ['kamar' => $kamar]);
    }
}