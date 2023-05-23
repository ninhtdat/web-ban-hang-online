<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $products = [
            [
                'image' => '1684257523.jpg',
                'name' => 'Áo khoác nữ',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 1
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Áo khoác Nam',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 2
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Quần dài Nam',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 2
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Quần short Nam',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 2
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Váy',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 1
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Cặp balo',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 3
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Túi xách',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 3
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Đồng hồ',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 5
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Kính râm',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 6
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Mũ',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 6
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Giày thể thao',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 4
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Giày âu',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 4
            ],
            [
                'image' => '1684257523.jpg',
                'name' => 'Giày cao gót',
                'quantity' => 10,
                'cost' => 100000,
                'price' => 150000,
                'product_type_id' => 4
            ]
        ];

        foreach ($products as $key=>$value) {
            Product::create($value);
        }
    }
}
