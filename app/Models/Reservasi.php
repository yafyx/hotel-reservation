<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasis';
    protected $guarded = [];
    protected $fillable = [
        'id_kamar',
        'id_tamu',
        'id_pemesan',
        'tgl',
        'jumlah_kamar',
        'tgl_checkin',
        'tgl_checkout',
        'status',
    ];

    public function GetTamu()
    {
        return $this->belongsTo(Tamu::class, 'id_tamu', 'id');
    }

    public function GetPemesan()
    {
        return $this->belongsTo(Tamu::class, 'id_pemesan', 'nama_pemesan');
    }

    public function GetKamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }

    public function GetJumlahKamar()
    {
        return $this->belongsTo(Kamar::class, 'jumlah_kamar', 'jumlah_kamar');
    }
}
