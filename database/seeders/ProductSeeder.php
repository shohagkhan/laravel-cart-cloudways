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
        $product = [
            [
                'name' => 'Product 1',
                'details' => 'Details of Product 1',
                'description' => 'Product 1 description',
                'brand' => 'Brand 1',
                'price' => '100',
                'shipping_cost' => '10',
                'image_path' => 'storage/product.png'
            ],
            [
                'name' => 'Product 2',
                'details' => 'Details of Product 2',
                'description' => 'Product 2 description',
                'brand' => 'Brand 2',
                'price' => '200',
                'shipping_cost' => '20',
                'image_path' => 'storage/product2.png'
            ],
            [
                'name' => 'Product 3',
                'details' => 'Details of Product 3',
                'description' => 'Product 3 description',
                'brand' => 'Brand 3',
                'price' => '300',
                'shipping_cost' => '30',
                'image_path' => 'storage/product3.jpg'
            ],
            [
                'name' => 'Product 4',
                'details' => 'Details of Product 4',
                'description' => 'Product 4 description',
                'brand' => 'Brand 4',
                'price' => '400',
                'shipping_cost' => '40',
                'image_path' => 'storage/product4.jpg'
            ],
            [
                'name' => 'Product 5',
                'details' => 'Details of Product 5',
                'description' => 'Product 5 description',
                'brand' => 'Brand 5',
                'price' => '500',
                'shipping_cost' => '50',
                'image_path' => 'storage/product5.jpg'
            ],
            [
                'name' => 'Product 6',
                'details' => 'Details of Product 6',
                'description' => 'Product 6 description',
                'brand' => 'Brand 6',
                'price' => '600',
                'shipping_cost' => '60',
                'image_path' => 'storage/product6.jpg'
            ]
        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
