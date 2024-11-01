<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donasi'; // Nama tabel yang benar di database

    // Tentukan kolom lain atau relasi jika diperlukan
    protected $fillable = [
        'donor_id',
        'jumlah',
        'tanggal_donasi',
        'metode_pembayaran',
        'status',
    ];

    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
}
