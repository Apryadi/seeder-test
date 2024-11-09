<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Journal;


class JournalSeeder extends Seeder
{
    public function run(): void{
    $faker = Faker::create();

    for ($i = 1; $i <= 10; $i++) {
        Journal::create([
            'title' => $faker->word,
            'penulis' => $faker->word,
            'tahunTerbit' => $faker->year,
            'penerbit' => $faker->word,
        ]);
        }
    }
}

