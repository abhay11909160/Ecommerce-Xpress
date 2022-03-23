<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
    [
        'name' => 'Samsung TV',
        'price' =>'50000',
        'description' => 'Android TV',
        'category' => 'TV',
        'gallery' => 'https://images.samsung.com/is/image/samsung/in-full-hd-tv-te50fa-ua43te50fakxxl-frontblack-231881877?$720_576_PNG$'
    
    ],
    [
        'name' => 'LG TV',
        'price' =>'55000',
        'description' => 'ANDROID QLED 8K SMART TV',
        'category' => 'TV',
        'gallery' => 'https://m.media-amazon.com/images/I/81I1sw-FBgL._SL1500_.jpg'
    
    ],
    [
        'name' => 'Panasonic',
        'price' =>'25000',
        'description' => 'Smart Refigerator',
        'category' => 'Refrigerator',
        'gallery' => 'https://m.media-amazon.com/images/I/71bRNQxKzNL._SL1500_.jpg'
    
    ]
    ]);
    }
}
