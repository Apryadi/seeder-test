<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\CD;

class CDSeeder extends Seeder
{
    public function run(): void{
    $faker = Faker::create();

    for ($i = 1; $i <= 10; $i++) {
        CD::create([
            'judul' => $faker->word,
            'sutradara' => $faker->word,
            'tahunTerbit' => $faker->year,
        ]);
        }
    }
}