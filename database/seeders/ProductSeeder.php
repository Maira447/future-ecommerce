<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
    "title" => "Temperature-Controlled Smart Delivery Box",
    "image" => "products/temperature_box.jpg",
    "about" => "Preserves food and medicine with intelligent cooling and heating system.",
    "price" => 45000,
    "stock_quantity" => 4,
    "discount" => 10,
    "category_id" => 1
]);

Product::create([
    "title" => "Facial Recognition Delivery Box",
    "image" => "products/facial_recognition_box.jpg",
    "about" => "Unlocks with AI-powered face detection for secure home delivery.",
    "price" => 75000,
    "stock_quantity" => 3,
    "discount" => 8,
    "category_id" => 2
]);

Product::create([
    "title" => "Solar-Powered Smart Box",
    "image" => "products/solar_smart_box.jpg",
    "about" => "Eco-friendly box for off-grid smart delivery with solar charging.",
    "price" => 55000,
    "stock_quantity" => 2,
    "discount" => 12,
    "category_id" => 1
]);

Product::create([
    "title" => "Multi-Compartment Parcel Locker",
    "image" => "products/multi_compartment_box.jpg",
    "about" => "Automated parcel locker with multiple sections for apartments.",
    "price" => 120000,
    "stock_quantity" => 1,
    "discount" => 5,
    "category_id" => 2
]);


    }
}
