<?php

namespace App\Http\Livewire\Kamar;

use App\Models\Kamar;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Illuminate\Support\Facades\Storage;

class DeleteKamar extends ModalComponent
{
    public $kamarId, $tipeKamar, $fasilitas, $gambar, $jumlahKamar;
    public string $confirmationTitle = '';
    public string $confirmationDescription = '';

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function confirm()
    {
        $this->kamarId;
        $kamar = Kamar::query()->find($this->kamarId);

        $kamar->delete();
        $images = json_decode($kamar->gambar);
        foreach ($images as $image) {
            Storage::disk('public')->delete($image);
        }

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);

        $this->dispatchBrowserEvent(
            'successDelete',
        );
    }

    public function cancel()
    {
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.kamar.delete-kamar');
    }
}
