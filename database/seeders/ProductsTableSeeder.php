<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{  public function run()
    {   // $this->call(ProductsTableSeeder::class);
        $this->call(ProductssTableSeeder::class);
      DB::table('products')->insert([
        [
        'name' => 'CICA RETI-A',
        'body' => '初心者でも使いやすいレチノール美容液',
        'price' => '3300',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ],
        [
        'name' => 'The Vitamin C 23',
        'bpdy' => '高強度純粋ビタミンC23%配合美容液',
        'price' => '2200',
        'created_at' => new Datetime(),
        'updated_at' => new Datetime()
      ],
    /**
     * Run the database seeds.
     *
     * @return void
     */
    }