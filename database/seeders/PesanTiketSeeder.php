<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PesanTiketSeeder extends Seeder
{
   
    public function run(): void
    {

        $data = [
            [
                'nomor_tiket' => 'MS948393HJS',
                'nama_lengkap' => 'Elisabeth',
                'email' => 'sabet@example.com',
                'no_telepon' => '081234567811',
                'jumlah' => 3,
                'tanggal_pemesanan' => '2025-04-15',
                'total_harga' => 15000.00,
                'status' => 'belum',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('pesan_tikets')->insert($data);
    
    }
}
