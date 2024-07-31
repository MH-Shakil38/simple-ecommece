<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Stock;
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
            $product = Product::query()->create([
                'category_id' => $faker->numberBetween(1, 10),
                'name' => $faker->word,
                'slug' => $faker->slug,
                'description' => $faker->paragraph,
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


            Stock::query()->insert([
                'product_id' => $product['id'],
                'quantity' => random_int(1,100),
                'price' => random_int(100,500),
                'offer' => random_int(0,10),
                'size' => random_int(50,100).'ml',
            ]);

            Stock::query()->insert([
                'product_id' => $product['id'],
                'quantity' => random_int(1,100),
                'price' => random_int(100,500),
                'offer' => random_int(0,10),
                'size' => random_int(50,100).'ml',
            ]);
        }
    }
}
