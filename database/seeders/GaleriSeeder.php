<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [  
                'keterangan' => 'Kunjungan SD Sultan Agung Pematangsiantar',
                'gambar' => 'assets/img/galeri.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'keterangan' => 'Penampilan sanggar tari museum di parapat',
                'gambar' => 'assets/img/galeri1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'keterangan' => 'Pembuatan Ulos bersama bapak Ganjar',
                'gambar' => 'assets/img/galeri2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('galeris')->insert($data);
    }
}
