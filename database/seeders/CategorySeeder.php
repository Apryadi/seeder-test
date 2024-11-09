<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;

class CategorySeeder extends Seeder
{
    public function run(): void{
    $faker = Faker::create();

    for ($i = 1; $i <= 10; $i++) {
        Category::create([
            'isbn' => $faker->randomDigit,
            'title' => $faker->word,
            'penulis' => $faker->word,
            'tahunTerbit' => $faker->Date(Y),
            'penerbit' => $faker->word,
        ]);
        }
    }
}
