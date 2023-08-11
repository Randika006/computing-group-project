<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Items1;


class ItemsSeeder1 extends Seeder
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
                'name' => 'RUN DRY MENS RUNNING T-SHIRT',
                'description' => 'Blue T-Shirt',
                'image' => '/img/BlueShirt.jpg',
                'price' => 100
            ]
            
           
        ];
  
        foreach ($items as $key => $value) {
            Items1::create($value);
        }
    }
}
