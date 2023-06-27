<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        $products = Product::factory()->count(50)->create();

        foreach ($products as $product)
        {
            $product->stocks()->create([
                'product_id' => rand(1,50),
                'quantity' => rand(1,10),
                'attributes' => json_encode([
                    [
                        'attribute_id' => 1,
                        'value_id' => rand(1,3)
                    ],
                    [
                        'attribute_id' => 2,
                        'value_id' => rand(4,5)
                    ]
                ])
                    ]);
        }
    }
}
