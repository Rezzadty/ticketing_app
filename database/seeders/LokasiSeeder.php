<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lokasi;

class LokasiSeeder extends Seeder
{
    public function run(): void
    {
         $lokasis = [
            ['nama_lokasi' => 'Stadion Utama'],
            ['nama_lokasi' => 'Galeri Seni Kota'],
            ['nama_lokasi' => 'Taman Kota'],
        ];   
        foreach ($lokasis as $lokasi) {
            Lokasi::create(['nama' => $lokasi['nama_lokasi']]);
        }     
    }
}
