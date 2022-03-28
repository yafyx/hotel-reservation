<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasis';
    protected $guarded = [
        'id', 'booking_id'
    ];
    protected $fillable = [
        'booking_id',
        'nama_tamu',
        'nama_pemesan',
        'email',
        'no_tlp',
        'id_kamar',
        'jumlah_kamar',
        'permintaan_khusus',
        'total_harga',
        'tgl_checkin',
        'tgl_checkout',
        'status',
    ];

    public function GetKamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }

    public function GetJumlahKamar()
    {
        return $this->belongsTo(Kamar::class, 'jumlah_kamar', 'jumlah_kamar');
    }
}
