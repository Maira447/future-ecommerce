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
            'title' => 'Terrenos',
            'image' => 'categories/yTuvr6Ba81YVNEpJzPQ5hePQgdnQb6zNqGiEGiSf.jpg'
        ]);

        Category::create([
            'title' => 'Avatares',
            'image' => 'categories/oFUTu8T5MBCW5Lr5mRETIdGgPI85sDGbAO6teGSG.webp'
        ]);

        Category::create([
            'title' => 'Softwares',
            'image' => 'categories/qzyuavHPgE0S2fugAYXvskuFUgCAHFztwhC1a1au.webp'
        ]);

        Category::create([
            'title' => 'NFTs',
            'image' => 'categories/2L6cqFuTXC84Fde5SIbBO9SG5ZCvIJLIgelaVdzI.jpg'
        ]);
    }
}
