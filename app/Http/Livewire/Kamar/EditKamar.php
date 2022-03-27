<?php

namespace App\Http\Livewire\Kamar;

use App\Models\FasilitasKamar;
use App\Models\Kamar;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class EditKamar extends ModalComponent
{
    use WithFileUploads;

    public $kamarId, $deskripsiKamar, $tipeKamar, $jumlahKamar;
    public $selectedFasilitas = [];
    public $fasilitasKamar = [];
    public $images = [];

    protected $rules = [
        'tipeKamar' => 'required',
        'deskripsiKamar' => 'required',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg',
        'jumlahKamar' => 'required|numeric',
    ];

    protected $messages = [
        'tipeKamar.required' => 'Tipe Kamar harus diisi',
        'deskripsiKamar.required' => 'Deskripsi Kamar harus diisi',
        'images.*.image' => 'File yang diupload harus berupa gambar',
        'jumlahKamar.required' => 'Jumlah Kamar harus diisi',
        'jumlahKamar.numeric' => 'Jumlah Kamar harus berupa angka',
    ];

    public function update($kamarId)
    {
        $this->validate();

        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('images', 'public');
        }

        $this->images = json_encode($this->images);
        $kamar = Kamar::find($kamarId);

        if ($this->images != $kamar->gambar) {
            $oldImages = json_decode($kamar->gambar);
            foreach ($oldImages as $oldImage) {
                Storage::disk('public')->delete($oldImage);
            }
        }

        $kamar->update([
            'tipe_kamar' => $this->tipeKamar,
            'deskripsi_kamar' => $this->deskripsiKamar,
            'fasilitas' => json_encode($this->selectedFasilitas),
            'gambar' => $this->images,
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
        $fasilitas = FasilitasKamar::all();
        return view('livewire.kamar.edit-kamar', ['kamar' => $kamar, 'fasilitas' => $fasilitas]);
    }
}
