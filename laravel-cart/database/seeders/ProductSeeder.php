<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Apple Macbook Air 2021',
                'details' => 'Apple Macbook , 16GB, 256GB SSD',
                'description' => 'great laptop for everyday work',
                'brand' => 'Apple',
                'price' => 2499,
                'shipping_cost' => 25,
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Iphone 13',
                'details' => 'Pro',
                'description' => 'Great Phone',
                'brand' => 'Apple',
                'price' => 1000,
                'shipping_cost' => 10,
                'image_path' => 'storage/phone.png'
            ],
        ];

        foreach($products as $key=>$value){
            Product::create($value);
        }
        
    }
}
