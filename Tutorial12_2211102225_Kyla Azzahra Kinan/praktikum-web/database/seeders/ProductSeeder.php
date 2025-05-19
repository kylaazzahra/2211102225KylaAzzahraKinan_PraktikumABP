<?php

/*
  NIM: 2211102205
  DAMA: Isnaeni Fatmawati
*/

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Variant;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $p1 = Product::create(['name' => 'Kaos Polos']);
        $p2 = Product::create(['name' => 'Celana Jeans']);

        $p1->variants()->createMany([
            ['variant_name' => 'Merah - M'],
            ['variant_name' => 'Biru - L'],
        ]);

        $p2->variants()->createMany([
            ['variant_name' => 'Hitam - XL'],
            ['variant_name' => 'Abu - M'],
        ]);
    }
}
