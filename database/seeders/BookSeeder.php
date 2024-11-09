<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 
use Faker\Factory as Faker;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void{
    $faker = Faker::create();

    for ($i = 1; $i <= 10; $i++) {
        Book::create([
            'isbn' => $faker->randomDigit,
            'title' => $faker->word,
            'penulis' => $faker->word,
            'tahunTerbit' => $faker->year,
            'penerbit' => $faker->word,
        ]);
        }
    }
}
