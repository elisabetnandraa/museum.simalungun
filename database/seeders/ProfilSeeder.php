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
                'deskripsi' => ' Museum Simalungun dibangun pada tanggal 10 April 1939 di Pematangsiantar oleh Raja-raja Simalungun dengan menggunakan 
                biaya sebesar 1.650 Gulden dan diresmikan pada tanggal 30 April 1940. Museum Simalungun dibangun dengan bentuk yang menyerupai 
                rumah adat simalungun yang berbentuk rumah panggung. Ada 
                keunikan yang ada pada bangunan Rumah Bolon atau Museum 
                Simalungun. Museum Simalungun itu berdiri dengan kokoh dengan 
                beberapa tiang yang terbuat dari kayu-kayu keras yang mempunyai 
                kualitas tinggi. Karena bangunan ini berbentuk rumah 
                panggung,tentunya untuk masuk ke dalam museum tersebut 
                adalah dengan tangga. Tangga nya juga terbuat dari papan kayu 
                yang keras sehingga tidak mudah rapuh. Dan ada dibuat tali rotan 
                sebagai pegangan untuk menaiki tangga tersebut.',
                'gambar' => 'assets/img/profil1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('profils')->insert($data);
    }
}
