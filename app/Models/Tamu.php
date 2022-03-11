<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
    protected $table = 'tamus';
    protected $fillable = ['nama', 'email', 'no_tlp'];

    public function Tamu()
    {
        return $this->hasOne(Reservasi::class, 'id_tamu');
    }

    public function Pemesan()
    {
        return $this->hasOne(Reservasi::class, 'id_pemesan');
    }
}
