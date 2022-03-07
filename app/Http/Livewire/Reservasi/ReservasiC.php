<?php

namespace App\Http\Livewire\Reservasi;

use App\Models\Reservasi;
use Livewire\Component;

class ReservasiC extends Component
{
    public function render()
    {
        $this->reservasi = Reservasi::all();
        return view('reservation');
    }
}
