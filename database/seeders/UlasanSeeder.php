<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UlasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [  
                'nama' => 'Budi',
                'ulasan' => 'lorem ipsum dolor sit amet consectetur adipiscing elit', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti',
                'ulasan' => 'lorem ipsum dolor sit amet consectetur adipiscing elit', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Andi',
                'ulasan' => 'lorem ipsum dolor sit amet consectetur adipiscing elit', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Tina',
                'ulasan' => 'lorem ipsum dolor sit amet consectetur adipiscing elit', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rudi',
                'ulasan' => 'lorem ipsum dolor sit amet consectetur adipiscing elit', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('ulasans')->insert($data);
    }
}
