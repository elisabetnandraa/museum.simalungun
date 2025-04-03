<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjelasan' => ' Museum Simalungun adalah museum tertua di Sumatera Utara
                dan Museum ini terletak di Kota Pematang Siantar. Museum
                Simalungun dibangun pada tanggal 10 April 1939 di
                Pematangsiantar oleh Raja-raja Simalungun dengan
                menggunakan biaya sebesar 1.650 Gulden dan diresmikan pada
                tanggal 30 April 1940. Museum ini dibangun Raja Marpitu
                Simalungun,yakni ( Raja Siantar,sauhaluh damanik,Raja
                Tanah Jawa Sinaga,Raja Pakek Purba dasuha,Raja Dolok Silou
                Purba Tambak,Raja Raya Pondaihaim saragih garingging,Raja
                Purba purba pak-pak,Dan raja silimakuta Purba girsang ).  Museum Simalungun dibangun dengan bentuk yang
                menyerupai rumah adat simalungun yang berbentuk rumah
                panggung. Jumlah koleksi Museum Simalungun berjumlah 860
                buah, dimana seluruhnya tertata rapi dalam vitrine atau lemari
                pajangan Museum Simalungun.',
                'gambar' => 'assets/img/profil2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('subprofils')->insert($data);
    }
}
