<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamars';

    protected $fillable = [
        'tipe_kamar', 'fasilitas', 'harga', 'status'
    ];

    public function Reservasi()
    {
        return $this->hasOne(Reservasi::class, 'id_kamar');
    }
}
