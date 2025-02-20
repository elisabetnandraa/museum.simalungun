<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BeritaSeeder;
use Database\Seeders\ProfilSeeder;
use Database\Seeders\JadwalSeeder;
use Database\Seeders\GaleriSeeder;
use Database\Seeders\KoleksiSeeder;
use Database\Seeders\PameranSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(BeritaSeeder::class);
        $this->call(ProfilSeeder::class);
        $this->call(JadwalSeeder::class);
        $this->call(GaleriSeeder::class);
        $this->call(KoleksiSeeder::class);
        $this->call(PameranSeeder::class);
    }
}
