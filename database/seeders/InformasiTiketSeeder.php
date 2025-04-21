<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformasiTiketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'harga' => 5000,
                'deskripsi' => 'Informasi tiket untuk mengunjungi Museum Simalungun',
                'gambar' => 'assets/img/museum.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('informasi_tikets')->insert($data);
    }
}
