<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PameranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Pameran Sumpah Pemuda',
                'gambar' => 'assets/img/pameran1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pameran Sumpah Pemuda',
                'gambar' => 'assets/img/pameran1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pameran Sumpah Pemuda',
                'gambar' => 'assets/img/pameran1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('pamerans')->insert($data);
    }
}
