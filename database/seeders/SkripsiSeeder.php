<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Skripsi;


class SkripsiSeeder extends Seeder
{
    public function run(): void{
    $faker = Faker::create();

    for ($i = 1; $i <= 10; $i++) {
        Skripsi::create([
            'judul' => $faker->word,
            'namaSiswa' => $faker->word,
            'NamaPembimbing' => $faker->word,
            'tanggalSidangSkripsi' => $faker->date,
        ]);
        }
    }
}