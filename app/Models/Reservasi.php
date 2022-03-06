<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';
    protected $fillable = [
        'tipe_kamar',
        'nama_pemesan',
        'nama_tamu',
        'tgl',
        'no_kamar',
        'tgl_checkin',
        'tgl_checkout',
        'status',
    ];

    public function GetTamu()
    {
        return $this->belongsTo(Tamu::class, 'id_tamu');
    }
}
