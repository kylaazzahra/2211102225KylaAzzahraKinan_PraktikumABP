<?php

/*
  NIM: 2211102205
  DAMA: Isnaeni Fatmawati
*/

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    $this->call(ProductSeeder::class);
    }

}
