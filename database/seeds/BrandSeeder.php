<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'nama' => 'Adidas',
            'negara' => 'Jerman',
            'gambar' => 'adidas.png',
        ]);

        DB::table('brands')->insert([
            'nama' => 'Nike',
            'negara' => 'Amerika Serikat',
            'gambar' => 'nike.png',
        ]);

        DB::table('brands')->insert([
            'nama' => 'Compass',
            'negara' => 'Indonesia',
            'gambar' => 'compass.png',
        ]);

        DB::table('brands')->insert([
            'nama' => 'Asics',
            'negara' => 'Jepang',
            'gambar' => 'asics.png',
        ]);
    }
}
