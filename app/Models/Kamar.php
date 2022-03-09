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
        'tipe_kamar', 'fasilitas', 'status'
    ];

    public function Reservasi()
    {
        return $this->hasOne(Reservasi::class, 'id_kamar');
    }
}
