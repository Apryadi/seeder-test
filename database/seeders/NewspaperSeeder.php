<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Newspaper;


class NewspaperSeeder extends Seeder
{
    public function run(): void{
    $faker = Faker::create();

    for ($i = 1; $i <= 10; $i++) {
        Newspaper::create([
            'judul' => $faker->word,
            'penulis' => $faker->word,
            'tahunTerbit' => $faker->year,
            'konten' => $faker->word,
        ]);
        }
    }
}