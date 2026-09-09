<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        // Garante que existem produtos e clientes para associar
        $products = Product::all();
        $customers = Customer::all();

        if ($products->isEmpty() || $customers->isEmpty()) {
            Review::factory(10)->create();
            return;
        }

        foreach ($products as $product) {
            Review::factory(2)->create([
                'product_id' => $product->id,
                'customer_id' => $customers->random()->id,
            ]);
        }
    }
}