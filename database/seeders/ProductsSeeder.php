<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products=[
            [
                'name'=>'Apple macbook pro 13',
                'details'=>'Apple intell' ,
                'description'=>'intell ',
                'brand'=>'apple',
                'price' => 1100,
                'shipping_cost'=> 2,
                'image_path'=>'/storage/product.png',
            ],
            [
                'name'=>'Apple macbook pro 14',
                'details'=>'Apple m1' ,
                'description'=>'m1 ',
                'brand'=>'apple',
                'price' => 1000,
                'shipping_cost'=> 5,
                'image_path'=>'/storage/product2.png',
            ]
            ];

            foreach($products as $key => $value)
            {
                Product::create($value);

            }
    }
}
