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
                'nama' => 'Vebie Yoseva Theresia',
                'ulasan' => 'Pertama kali kesini, museum ini menceritakan tentang adanya Simalungun. Di dalamnya ada benda-benda bersejarah. Biaya masuk 5k.', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Putri Manurung',
                'ulasan' => 'Kita benar - benar bisa belajar tentang kebudayaan Simlaungun disini. Isinya benar - bener asli, dan diolah langsung oleh Yayasan Museum Simalungun.', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Antonius Munthe',
                'ulasan' => 'Semoga semua generasi muda Indonesia berkenan ikut melestarikan budaya Indonesia dengan mengunjungi Museum Simalungun ini dan ikut merawatnya.', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Elisabeth',
                'ulasan' => 'semoga museum ini bisa terus berkembang.', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('ulasans')->insert($data);
    }
}
