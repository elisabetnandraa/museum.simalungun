<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanTiket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_tiket',
        'tanggal_pemesanan',
        'jumlah',
        'nama_lengkap',
        'no_telepon',
        'email',
        'total_harga',
        'status',
    ];
}
