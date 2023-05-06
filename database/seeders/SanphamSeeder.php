<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanphamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('loais')->insert([
            ['l_ten' => 'quan short nam',
            'sp_giaGoc'=>'100000',
            'sp_giaBan'=>'150000',
            'sp_hinh'=>'images/product-01.jpg',
            'l_ma'=>1,
        ],
            
        ]);
    }
}
