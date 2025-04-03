<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    /**
     * Jalankan seeder database.
     */
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Berkunjung ke Museum Simalungun Ganjar Pranowo di berikan kain ulos',
                'deskripsi' => 'Ganjar juga menyampaikan terima kasih atas sambutan yang luar biasa masyarakat. Mantan gubernur Jawa Tengah itu.',
                'gambar' => 'assets/img/ganjar.jpg',
                'link' => 'https://indoposco.id/politik/2023/11/11/berkunjung-ke-museum-simalungun-sumut-ganjar-pranowo-diberikan-kain-ulos-oleh-masyarakat-adat/2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Belajar Budaya dan Sejarah, Murid SD dan Guru Kunjungi Museum Simalungun',
                'deskripsi' => 'UPTD SD Negeri 1222399 Jalan Mawar Kelurahan Simarito Kecamatan Siantar Barat mengunjungi musem Simalungun.',
                'gambar' => 'assets/img/sd.png',
                'link' => 'https://indoposco.id/politik/2023/11/11/berkunjung-ke-museum-simalungun-sumut-ganjar-pranowo-diberikan-kain-ulos-oleh-masyarakat-adat/2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Kapoldasu Kunjungi Museum Simalungun',
                'deskripsi' => 'Kapoldasu Irjen (Pol) Rycko Amelza Dahniel saat mengunjungi Museum Simalungun yang berada di Jalan Sudirman, Kecamatan Siantar Barat, Kota Siantar, Selasa.',
                'gambar' => 'assets/img/polda.jpg',
                'link' => 'https://indoposco.id/politik/2023/11/11/berkunjung-ke-museum-simalungun-sumut-ganjar-pranowo-diberikan-kain-ulos-oleh-masyarakat-adat/2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('beritas')->insert($data);
    }
}
