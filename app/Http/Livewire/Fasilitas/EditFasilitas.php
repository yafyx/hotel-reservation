<?php

namespace App\Http\Livewire\Fasilitas;

use App\Models\Fasilitas;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class EditFasilitas extends ModalComponent
{
    public $fasilitasId, $namaFasilitas;
    public $images = [];

    protected $rules = [
        'namaFasilitas' => 'required',
    ];

    protected $messages = [
        'namaFasilitas.required' => 'Nama Fasilitas belum diubah',
    ];

    public function update($fasilitasId)
    {
        $this->validate();

        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('images', 'public');
        }

        $this->images = json_encode($this->images);
        $fasilitas = Fasilitas::find($fasilitasId);

        if ($this->images != $fasilitas->gambar) {
            $oldImages = json_decode($fasilitas->gambar);
            foreach ($oldImages as $oldImage) {
                Storage::disk('public')->delete($oldImage);
            }
        }

        $fasilitas->update([
            'nama_fasilitas' => $this->namaFasilitas,
            'gambar' => $this->images,
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
