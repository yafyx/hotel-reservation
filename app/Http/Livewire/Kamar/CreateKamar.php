<?php

namespace App\Http\Livewire\Kamar;

use App\Models\FasilitasKamar;
use App\Models\Kamar;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;

class CreateKamar extends ModalComponent
{
    use WithFileUploads;

    public $tipeKamar, $deskripsi_kamar, $harga, $jumlahKamar;
    public $selectedFasilitas = [];
    public $images = [];

    protected $rules = [
        'tipeKamar' => 'required',
        'deskripsi_kamar' => 'required',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        'selectedFasilitas' => 'required',
        'jumlahKamar' => 'required|numeric',
    ];

    protected $messages = [
        'tipeKamar.required' => 'Tipe Kamar harus diisi',
        'fasilitas.required' => 'Fasilitas harus diisi',
        'images.*.image' => 'File yang diupload harus berupa gambar',
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

        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('images', 'public');
        }

        $this->images = json_encode($this->images);

        Kamar::create([
            'tipe_kamar' => $this->tipeKamar,
            'deskripsi_kamar' => $this->deskripsi_kamar,
            'fasilitas' => json_encode($this->selectedFasilitas),
            'harga' => $this->harga = str_replace('.', '', $this->harga),
            'gambar' => $this->images,
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
