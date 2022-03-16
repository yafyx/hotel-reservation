<?php

namespace App\Http\Livewire\Fasilitas;

use App\Models\Fasilitas;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateFasilitas extends ModalComponent
{
    public $namaFasilitas, $gambar;

    protected $rules = [
        'namaFasilitas' => 'required',
    ];

    protected $messages = [
        'namaFasilitas.required' => 'Nama Fasilitas harus diisi',
    ];

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function store()
    {
        $this->validate();
        Fasilitas::create([
            'nama_fasilitas' => $this->namaFasilitas,
            'gambar' => '1',
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
        return view('livewire.fasilitas.create-fasilitas');
    }
}
