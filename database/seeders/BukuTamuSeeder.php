<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BukuTamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [  
                'nama' => 'Budi',
                'alamat' => 'Jl. Simalungun',
                'tanggal_kunjungan' => '2025-04-01', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti',
                'alamat' => 'Jl. Simalungun',
                'tanggal_kunjungan' => '2025-04-05', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Andi',
                'alamat' => 'Jl. Simalungun',
                'tanggal_kunjungan' => '2025-04-10', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Tina',
                'alamat' => 'Jl. Simalungun',
                'tanggal_kunjungan' => '2025-04-15', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rudi',
                'alamat' => 'Jl. Simalungun',
                'tanggal_kunjungan' => '2025-04-20', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('buku_tamus')->insert($data);
    }
}
