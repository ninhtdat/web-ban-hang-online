<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $types = [
            [
                'name' => 'Women',
            ],
            [
                'name' => 'Men',
            ],
            [
                'name' => 'Bag',
            ],
            [
                'name' => 'Shoes',
            ],
            [
                'name' => 'Watches',
            ],
            [
                'name' => 'Other',
            ],
        ]; 
            foreach ($types as $key=>$value){
                ProductType::create($value);
            }
    }
}
