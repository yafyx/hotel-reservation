<?php

namespace App\Http\Livewire\Kamar;

use App\Models\FasilitasKamar;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CreateFasilitasKamar extends ModalComponent
{
    public $namaFasilitas;

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
        FasilitasKamar::create([
            'nama_fasilitas' => $this->namaFasilitas,
            'id_user' => auth()->user()->id,
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
        return view('livewire.kamar.create-fasilitas-kamar');
    }
}
