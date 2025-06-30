<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => ' Box Sizes',
            'image' => 'categories/box.jpg'
        ]);

        Category::create([
            'title' => 'Box Features',
            'image' => 'categories/box.jpg'
        ]);

        Category::create([
            'title' => 'Control Systems',
            'image' => 'categories/qzyuavHPgE0S2fugAYXvskuFUgCAHFztwhC1a1au.webp'
        ]);

        Category::create([
            'title' => ' Box Accessories',
            'image' => 'categories/2L6cqFuTXC84Fde5SIbBO9SG5ZCvIJLIgelaVdzI.jpg'
        ]);
    }
}
