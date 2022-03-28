<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;

    protected $table = 'kamars';

    protected $guarded = [];

    protected $fillable = [
        'tipe_kamar', 'deskripsi_kamar', 'fasilitas', 'harga', 'gambar', 'jumlah_kamar',
    ];

    public function Reservasi()
    {
        return $this->hasOne(Reservasi::class, 'id_kamar');
    }
    public function JumlahKamar()
    {
        return $this->hasOne(Reservasi::class, 'jumlah_kamar', 'jumlah_kamar');
    }
}
