<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('loais')->insert([
            ['l_ten' => 'thời trang nam'],
            ['l_ten' => 'thời trang nữ'],
            ['l_ten' => 'giày'],
            
        ]);
    }
}
