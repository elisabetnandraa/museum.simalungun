<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProfilSeeder extends Seeder
{
    /**
     * Jalankan seeder database.
     */
    public function run(): void
    {
        $data = [
            [  
                'deskripsi' => 'Museum Simalungun dibangun pada tanggal 10 April 1939 di Pematangsiantar oleh  Raja-raja Simalungun dengan menggunakan biaya sebesar 1.650 Gulden dan diresmikan pada  tanggal 30 April 1940.',
                'gambar' => 'assets/img/profil1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'deskripsi' => 'Museum Simalungun dibangun pada tanggal 10 April 1939 di Pematangsiantar oleh  Raja-raja Simalungun dengan menggunakan biaya sebesar 1.650 Gulden dan diresmikan pada  tanggal 30 April 1940.',
                'gambar' => 'assets/img/profil2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('profils')->insert($data);
    }
}
