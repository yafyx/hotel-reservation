<?php

namespace App\Http\Livewire\Kamar;

use App\Models\FasilitasKamar;
use App\Models\Kamar;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateKamar extends ModalComponent
{
    public $tipeKamar, $deskripsi_kamar, $gambar, $jumlahKamar;
    public $selectedFasilitas = [];

    protected $rules = [
        'tipeKamar' => 'required',
        'deskripsi_kamar' => 'required',
        'selectedFasilitas' => 'required',
        'jumlahKamar' => 'required|numeric',
    ];

    protected $messages = [
        'tipeKamar.required' => 'Tipe Kamar harus diisi',
        'fasilitas.required' => 'Fasilitas harus diisi',
        'jumlahKamar.required' => 'Jumlah Kamar harus diisi',
        'jumlahKamar.numeric' => 'Jumlah Kamar harus berupa angka',
    ];

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function store()
    {
        $this->validate();
        Kamar::create([
            'tipe_kamar' => $this->tipeKamar,
            'deskripsi_kamar' => $this->deskripsi_kamar,
            'fasilitas' => json_encode($this->selectedFasilitas),
            'gambar' => '1',
            'jumlah_kamar' => $this->jumlahKamar,
        ]);

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);

        $this->dispatchBrowserEvent(
            'successAdd',
        );
    }

    public function cancel()
    {
        $this->closeModal();
    }

    public function render()
    {
        $kamars = Kamar::all();
        $fasilitas = FasilitasKamar::all();
        return view('livewire.kamar.create-kamar', ['kamars' => $kamars, 'fasilitas' => $fasilitas]);
    }
}
