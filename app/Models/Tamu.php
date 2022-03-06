<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;
    protected $table = 'tamu';
    protected $fillable = ['nama', 'email', 'no_tlp'];

    public function Tamu()
    {
        return $this->hasOne(Reservasi::class, 'id_tamu');
    }
}
