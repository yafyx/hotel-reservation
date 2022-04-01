<?php

namespace App\Http\Livewire\Fasilitas;

use App\Models\Fasilitas;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Livewire\WithFileUploads;

class CreateFasilitas extends ModalComponent
{
    use WithFileUploads;

    public $namaFasilitas;
    public $images = [];

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

        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('images', 'public');
        }

        $this->images = json_encode($this->images);

        Fasilitas::create([
            'nama_fasilitas' => $this->namaFasilitas,
            'gambar' => $this->images,
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
