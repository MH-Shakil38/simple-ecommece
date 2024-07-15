<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('categories')->insert([
                'name' => $faker->word,
                'slug' => $faker->slug,
                'description' => $faker->paragraph,
                'status' => $faker->numberBetween(0, 1), // Randomly 0 or 1
                'popular' => $faker->numberBetween(0, 1), // Randomly 0 or 1
                'show_menu' => $faker->numberBetween(0, 1), // Randomly 0 or 1
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
