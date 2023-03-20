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
            "title" => "Imóvel comercial a Venda",
            "image" => "products/I9r0Np5WiZttFMFOBykpPIcfV2Ou9vHnE2FLTWe9.jpg",
            "about" => "Loja de animes no centro de MegaTho.",
            "price" => 150000,
            "stock_quantity" => 2,
            "discount" => 15,
            "category_id" => 1
        ]);

        Product::create([
            "title" => "Combo: dois avatares",
            "image" => "products/pdWbqX5V2Nt2HyQSfcsksqJjUlD9qtgPiPbo2TEY.jpg",
            "about" => "Combo dois avatares pelo preço de um.",
            "price" => 275000,
            "stock_quantity" => 1,
            "discount" => 10,
            "category_id" => 2
        ]);

        Product::create([
            "title" => "Avatar Loiro",
            "image" => "products/3zOFVeb3YZq2FlaGBKYN3BbMz7XZc3P6RwofzgtN.jpg",
            "about" => "Avatar do Mark Zuckemberg. Edição limitada para uso.",
            "price" => 1000000,
            "stock_quantity" => 2,
            "discount" => 0,
            "category_id" => 2
        ]);

        Product::create([
            "title" => "Imóvel para venda",
            "image" => "products/rbErelR5WaRPghUPBcWBV5iNMRYY326fR2TLKqxu.jpg",
            "about" => "Loja de roupas mobiliada pronta para venda no distrito de Irish na cidade de MegaTho.",
            "price" => 500000,
            "stock_quantity" => 5,
            "discount" => 5,
            "category_id" => 1
        ]);

    }
}
