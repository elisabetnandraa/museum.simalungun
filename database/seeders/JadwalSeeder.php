<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Jalankan seeder database.
     */
    public function run(): void
    {
        $data = [
            [
                'hari' => 'Senin',
                'jam' => '08.00 pagi - 17.00 sore',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hari' => 'Selasa',
                'jam' => '08.00 pagi - 17.00 sore',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hari' => 'Rabu',
                'jam' => '08.00 pagi - 17.00 sore',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hari' => 'Kamis',
                'jam' => '08.00 pagi - 17.00 sore',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hari' => 'Jumat',
                'jam' => '08.00 pagi - 17.00 sore',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'hari' => 'Sabtu',
                'jam' => '08.00 pagi - 17.00 sore',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('jadwals')->insert($data);
    }
}
