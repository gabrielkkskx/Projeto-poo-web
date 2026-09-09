<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $product = Product::first();
        $customer = Customer::first();

        if ($product && $customer) {
            Review::factory()->create([
                'product_id' => $product->id,
                'customer_id' => $customer->id,
                'rating' => 5,
                'comment' => 'Produto excelente!',
            ]);
        }
    }
}