<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Items2;


class ItemsSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'KEEPDRY 100 ADULT BASE LAYER TOP - BLACK',
                'description' => 'Layer Black',
                'image' => '/img/SS 11.jpg',
                'price' => 100
            ]
            
           
        ];
  
        foreach ($items as $key => $value) {
            Items2::create($value);
        }
    }
}
