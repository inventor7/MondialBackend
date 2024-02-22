<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // i already have 7 categories in the database
        $categories = \App\Models\Category::all();
        \App\Models\Product::factory(100)->create([
            'category_id' => $categories->random()->id,
        ]);
    }
}
