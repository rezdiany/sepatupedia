<?php

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
        DB::table('products')->insert([
            'nama' => 'Nike Airmax 1',
            'harga' => 2099000,
            'brand_id' => 2,
            'gambar' => 'nikeairmax.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Nike SB Zoom Stefan Janoski RM',
            'harga' => 1429000,
            'brand_id' => 2,
            'gambar' => 'nikesbzoom.png'
        ]);

        DB::table('products')->insert([
            'nama' => "Nike Blazer Mid 77' Vintage",
            'harga' => 1799000,
            'brand_id' => 2,
            'gambar' => 'nikeblazer.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Nike Challenger OG',
            'harga' => 1279000,
            'brand_id' => 2,
            'gambar' => 'nikeog.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Air Jordan XXXV "Sisterhood" ',
            'harga' => 2599000,
            'brand_id' => 2,
            'gambar' => 'airjordan.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Edge XT Shoes',
            'harga' => 1260000,
            'brand_id' => 1,
            'gambar' => 'edgext.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Star Wars NMD_R1 V2 Shoes',
            'harga' => 3000000,
            'brand_id' => 1,
            'gambar' => 'starwarsnmd.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Gel-Quantum 90 2 TRL',
            'harga' => 1199000,
            'brand_id' => 4,
            'gambar' => 'gelquantum.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Classic CT Slip-on',
            'harga' => 899000,
            'brand_id' => 4,
            'gambar' => 'classicct.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Asics Gel-Lyte III OG',
            'harga' => 1599000,
            'brand_id' => 4,
            'gambar' => 'asicsgel.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Asics Lyte Classic',
            'harga' => 1399000,
            'brand_id' => 4,
            'gambar' => 'asicslyte.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Gazelle Hi Black',
            'harga' => 338000,
            'brand_id' => 3,
            'gambar' => 'compasshibw.png'
        ]);
    }
}
