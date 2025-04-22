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
                'deskripsi' => ' Museum Simalungun dibangun pada tanggal 10 April 1939 di Pematangsiantar oleh para Raja Simalungun 
                dengan biaya sebesar 1.650 Gulden, dan diresmikan pada tanggal 30 April 1940.Bangunan museum ini dirancang menyerupai 
                rumah adat Simalungun, yaitu rumah panggung yang memiliki keunikan tersendiri. Museum Simalungun berdiri kokoh dengan 
                beberapa tiang yang terbuat dari kayu keras berkualitas tinggi.Karena berbentuk rumah panggung, akses masuk ke dalam 
                museum menggunakan tangga yang juga terbuat dari papan kayu keras sehingga tidak mudah rapuh. Sebagai pegangan saat
                menaiki tangga, disediakan tali rotan yang diikat kuat.Gedung museum ini menjadi bagian penting dalam sejarah permuseuman
                karena sejak diresmikan pada 30 April 1940 hingga dibongkar pada 19 Oktober 1981, telah mencatat lebih dari 40 tahun keberadaan 
                yang bermutu dalam dunia permuseuman. Koleksi barang-barang purbakala yang dimiliki Museum Simalungun menjadi daya tarik bagi 
                pengunjung, baik dari dalam maupun luar negeri. Berdasarkan catatan buku tamu dari tahun 1972 hingga Juni 1982, 
                jumlah pengunjung mencapai lebih dari 40.000 orang yang sebagian besar mengunjungi Rumah Bolon Adat Purba. Sumbangan dari para
                pengunjung tersebut mencapai Rp1.788.385,00. Perhatian dari instansi pemerintah, khususnya Departemen Pendidikan dan Kebudayaan 
                (Permuseuman), turut menjadi dorongan penting bagi pengurus museum, terutama dalam bentuk bantuan dan arahan. Salah satunya melalui 
                surat dari Menteri Muda Permuseuman, Drs. Kosmas Batubara, tertanggal 5 Juni 1982 No. 03/04, yang berisi himbauan agar seluruh potensi 
                yang ada di daerah dapat dimanfaatkan secara optimal. Demikian pula, hasil studi kelayakan Kanwil Departemen P dan K Provinsi Sumatra 
                Utara di Pematangsiantar pada tanggal 7 Juni 1982, yang disusun oleh Kepala Bidang Permuseuman Provinsi Sumatra Utara Drs. E.K. Siahaan 
                beserta staf Drs. J. Saragih, dinilai cukup baik dan dapat dijadikan pedoman oleh Pengurus Yayasan Museum Simalungun. Isi studi tersebut 
                mencakup rencana pembinaan agar Museum Simalungun dapat berkembang sesuai dengan ketentuan permuseuman yang berlaku saat ini. Dalam waktu 
                yang tidak lama, museum ini juga direncanakan akan menerima bantuan tambahan sesuai dengan permohonan Pengurus Yayasan Museum Simalungun 
                melalui surat tertanggal 28 Juli 1982 (S. Purba), Bidang Proyek. Selain itu, berdasarkan saran dari Bupati KDH Tingkat II Simalungun, 
                J.P. Silitonga, enam kios milik Yayasan Museum Simalungun akan dipugar dan dibangun ulang dengan desain khas daerah Simalungun, seperti 
                patung dan ukiran. Upaya ini bertujuan menjadikan Museum Simalungun sebagai simbol budaya dan daya tarik bagi masyarakat lokal, serta 
                lebih menarik minat wisatawan dari dalam maupun luar negeri, sehingga citra museum akan jauh lebih baik dibandingkan tahun-tahun sebelumnya.',
                'gambar' => 'assets/img/profil1.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('profils')->insert($data);
    }
}
