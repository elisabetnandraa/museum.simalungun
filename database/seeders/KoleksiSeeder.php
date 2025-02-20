<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KoleksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Samborik',
                'deskripsi' => 'Tempat hidangan yang digunakan oleh keluarga kerajaan pada masa lalu. Di atasnya, biasanya dilapisi dengan daun pisang sebagai alas, sehingga tidak perlu mencucinya lagi setelah digunakan dan bisa menghemat penggunaan air. Samborik ini terbuat dari bahan logam seperti tembaga dan kuningan, yang membuatnya tahan lama dan kokoh.',
                'gambar' => 'assets/img/koleksi1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Batil',
                'deskripsi' => 'Tempat minum yang digunakan oleh keluarga kerajaan pada masa lalu. Tempat minum ini terbuat dari bahan logam seperti tembaga dan kuningan, yang membuatnya memiliki daya tahan tinggi dan kokoh.',
                'gambar' => 'assets/img/koleksi2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('koleksis')->insert($data);
    }
}
