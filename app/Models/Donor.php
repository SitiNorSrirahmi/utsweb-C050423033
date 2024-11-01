<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'nomor_telepon',
        'alamat',
        'tanggal_bergabung',
    ];

    public function donasi()
    {
        return $this->hasMany(Donasi::class); // Sesuaikan dengan relasi yang tepat
    }
}