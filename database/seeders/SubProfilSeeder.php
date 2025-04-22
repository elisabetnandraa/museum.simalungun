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
                'penjelasan' => ' Museum Simalungun didirikan atas prakarsa tujuh Raja Simalungun bersama perwakilan pemerintah, 
                tokoh masyarakat, kepala distrik, serta tungkat yang berkumpul dalam pertemuan adat Harungguan. Pada awal berdirinya, 
                museum ini dikenal dengan nama Rumah Pusaka Simalungun. Namun, seiring waktu dan perkembangan zaman, namanya berubah 
                menjadi Museum Simalungun. Pembangunan museum selesai pada bulan Desember 1939 dan secara resmi dibuka untuk umum pada 
                tanggal 30 April 1940. Pengelolaan museum secara profesional dimulai 14 tahun kemudian oleh Yayasan Museum Simalungun, 
                yang berdiri sejak 27 September 1954.Dalam rangka peresmian museum, para Raja Marpitu turut menyumbangkan berbagai benda 
                bersejarah sebagai koleksi, seperti Pustaha Lak-lak, patung-patung batu dari masa megalitikum, perlengkapan dapur, 
                alat makan, peralatan tenun, perhiasan dari emas dan perak, koin, serta uang kuno. Oleh karena itu, Museum Simalungun 
                tidak hanya menjadi tempat penyimpanan benda bersejarah, tetapi juga menjadi saksi penting perjalanan sejarah masyarakat 
                Simalungun. Kepedulian para raja saat itu menjadi bukti nyata terhadap upaya pewarisan budaya kepada generasi masa depan.
                Pendirian museum ini dilandasi semangat untuk menjaga serta melestarikan benda-benda bersejarah agar tidak punah oleh arus 
                perubahan zaman. Sejak 7 Juni 1955, pengelolaan museum secara resmi berada di bawah naungan Yayasan Museum Simalungun. 
                Kegiatan pemeliharaan dan perawatan museum dibiayai dari donasi pengunjung serta dukungan pemerintah Kabupaten Simalungun 
                dan Pemerintah Kota Pematangsiantar.',
                'gambar' => 'assets/img/profil2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('subprofils')->insert($data);
    }
}
