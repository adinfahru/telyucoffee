<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->delete();

        DB::table('products')->insert([
            [
                'name' => 'Espresso',
                'description' => 'Strong and rich Italian coffee',
                'price' => 10000,
                'image_url' => 'images/espresso.png',
            ],
            [
                'name' => 'Latte',
                'description' => 'Smooth and creamy coffee with steamed milk',
                'price' => 8000,
                'image_url' => 'images/latte.jpg',
            ],
        ]);
    }
}
