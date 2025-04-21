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
                'nama' => 'elisabet',
                'alamat' => 'Jl. Simalungun',
                'tanggal_kunjungan' => '2025-04-01', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'vebie',
                'alamat' => 'Jl. Simalungun',
                'tanggal_kunjungan' => '2025-04-05', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'putri',
                'alamat' => 'Jl. Simalungun',
                'tanggal_kunjungan' => '2025-04-10', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'dimas',
                'alamat' => 'Jl. Simalungun',
                'tanggal_kunjungan' => '2024-04-10', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'andi',
                'alamat' => 'Jl. Simalungun',
                'tanggal_kunjungan' => '2024-02-10', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ];

        DB::table('buku_tamus')->insert($data);
    }
}
