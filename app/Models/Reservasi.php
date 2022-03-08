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
        'tgl',
        'no_kamar',
        'tgl_checkin',
        'tgl_checkout',
        'status',
    ];

    public function GetTamu()
    {
        return $this->belongsTo(Tamu::class, 'id_tamu', 'id');
    }

    public function GetKamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
}
