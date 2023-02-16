<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductSizePrice;

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
                'id'              => '1',
                'image'           => 'p1.jpeg',
                'name'            => 'Luffy',
                'category_id'     => '1',
                'description'     => 'This is Luffy',
                'status'          => 'ONHAND',
                'unit_price'           => '550',
                'retailed_price'   => '150',
                'stock'           => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [   
                'id'              => '2',
                'image'           => 'p2.jpeg',
                'name'            => 'Zoro',
                'category_id'     => '1',
                'description'     => 'This is zoro product',
                'status'          => 'ONHAND',
                'unit_price'           => '550',
                'retailed_price'   => '150',
                'stock'           => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [   
                'id'              => '3',
                'image'           => 'p3.jpeg',
                'name'            => 'Kurosaki Ichigo',
                'category_id'     => '2',
                'description'     => 'This is Kurosaki Ichigo product',
                'status'          => 'ONHAND',
                'unit_price'           => '550',
                'retailed_price'   => '150',
                'stock'           => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [   
                'id'              => '4',
                'image'           => 'p4.jpg',
                'name'            => 'Matsumoto Rangiku',
                'category_id'     => '2',
                'description'     => 'This is Matsumoto Rangiku product',
                'status'          => 'ONHAND',
                'unit_price'           => '550',
                'retailed_price'   => '150',
                'stock'           => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [   
                'id'              => '5',
                'image'           => 'p5.jpeg',
                'name'            => 'Ss Veg',
                'category_id'     => '3',
                'description'     => 'This is Ss Veg',
                'status'          => 'ONHAND',
                'unit_price'           => '550',
                'retailed_price'   => '150',
                'stock'           => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [   
                'id'              => '6',
                'image'           => 'p6.jpg',
                'name'            => 'Dragon Ball',
                'category_id'     => '3',
                'description'     => 'This is sample product',
                'status'          => 'ONHAND',
                'unit_price'           => '550',
                'retailed_price'   => '150',
                'stock'           => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [   
                'id'              => '7',
                'image'           => 'p7.jpeg',
                'name'            => 'Naruto',
                'category_id'     => '4',
                'description'     => 'This is sample product',
                'status'          => 'ONHAND',
                'unit_price'           => '550',
                'retailed_price'   => '150',
                'stock'           => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [   
                'id'              => '8',
                'image'           => 'p8.jpg',
                'name'            => 'Sakura',
                'category_id'     => '4',
                'description'     => 'This is sample product',
                'status'          => 'ONHAND',
                'unit_price'           => '550',
                'retailed_price'   => '150',
                'stock'           => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [   
                'id'              => '9',
                'image'           => 'p9.jpg',
                'name'            => 'GUNDUM',
                'category_id'     => '5',
                'description'     => 'This is sample product',
                'status'          => 'PRE-ORDER',
                'unit_price'           => '550',
                'retailed_price'   => '150',
                'stock'           => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [   
                'id'              => '10',
                'image'           => 'p10.jpg',
                'name'            => 'GUNDUM',
                'category_id'     => '5',
                'description'     => 'This is sample product',
                'status'          => 'PRE-ORDER',
                'unit_price'           => '550',
                'retailed_price'   => '150',
                'stock'           => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [   
                'id'              => '11',
                'image'           => 'p11.jpg',
                'name'            => 'GUNDUM',
                'category_id'     => '5',
                'description'     => 'This is sample product',
                'status'          => 'PRE-ORDER',
                'unit_price'           => '550',
                'retailed_price'   => '150',
                'stock'           => '50',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

        ];

     
        
        Product::insert($products);
    }
}
