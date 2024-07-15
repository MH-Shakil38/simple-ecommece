<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 300) as $index) {
            DB::table('products')->insert([
                'category_id' => $faker->numberBetween(1, 10),
                'name' => $faker->word,
                'slug' => $faker->slug,
                'description' => $faker->paragraph,
                'original_price' => $faker->randomFloat(2, 10, 100),
                'selling_price' => $faker->randomFloat(2, 5, 50),
                'offer_price' => $faker->randomFloat(2, 3, 30),
                'image' => $faker->imageUrl(640, 480, 'products', true),
                'quantity' => $faker->numberBetween(1, 100),
                'product_code' => $faker->uuid,
                'status' => $faker->numberBetween(0, 1), // Randomly 0 or 1
                'show_hot_deal' => $faker->numberBetween(0, 1), // Randomly 0 or 1
                'stock' => $faker->word,
                'stock_out' => $faker->word,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
