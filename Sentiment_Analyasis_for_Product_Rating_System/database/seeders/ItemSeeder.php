<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
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
                'name' => 'RUN DRY MENS RUNNING T-SHIRT BLUE',
                'description' => 'Blue T-Shirt.',
                'image' => '/img/BlueShirt.jpg',
                'price' => 100
            ],
            [
                'name' => 'Keepdry 100 Adult Base Layer Black',
                'description' => 'Layer Top - Black',
                'image' => '/img/LayerBlack.jpg',
                'price' => 500
            ],
            [
                'name' => 'RUN DRY MENS T-SHIRT',
                'description' => 'Grey T-shirt .',
                'image' => '/img/DryShirt.jpg',
                'price' => 400
            ],
            [
                'name' => 'DRY MENS TOP BLACK ',
                'description' => 'RUNNING TANK TOP BLACK',
                'image' => '/img/DryMen.jpg',
                'price' => 200
            ],

            [
                'name' => 'BTWIN ROCKRIDER 340 RED MTB CYCLE',
                'description' => 'Red color bike',
                'image' => '/img/KidsBike.jpg',
                'price' => 300
            ],
            [
                'name' => 'RUN DRY MENS RUNNING SHORT',
                'description' => 'For Begginers',
                'image' => '/img/Fitness.jpg',
                'price' => 300
            ],
            [
                'name' => 'Hiking Category 3 Sunglasses MH120A',
                'description' => 'Gender:Adult',
                'image' => '/img/glass.jpg',
                'price' => 300
            ],

            [
                'name' => 'BLACK COLOR RAIN COURT',
                'description' => 'single cord',
                'image' => '/img/court.jpg',
                'price' => 400
            ],

            [
                'name' => 'B1 500 kids scooter',
                'description' => 'Gender:Kids',
                'image' => '/img/SBike.jpg',
                'price' => 500
            ],
            [
                'name' => 'Kids Bike Helmet',
                'description' => 'Gender:Kids',
                'image' => '/img/helmet.jpg',
                'price' => 400
            ],
            
            
            [
                'name' => 'Football Goal',
                'description' => 'Folding:Collapsible.',
                'image' => '/img/kage1.jpg',
                'price' => 1000
            ],
           
            [
                'name' => 'Punching Bag - Red',
                'description' => 'Gender:Adult/Kids',
                'image' => '/img/punch.jpg',
                'price' => 2000
            ],

            [
                'name' => 'Basket-Ball',
                'description' => 'R100 Adult Size 7 Durable Basketball Perfect for Beginners',
                'image' => '/img/Bball.jpg',
                'price' => 800
            ],

            [
                'name' => 'Basket-Ball Yellow',
                'description' => 'R100 Size 5 Basketball - YellowPerfect for beginners. Durable',
                'image' => '/img/basketball.jpg',
                'price' => 500
            ],

            [
                'name' => 'Basketball Hoop',
                'description' => 'Kids/Adult Mini Basketball Hoop SK100 Dunkers - YellowBall included',
                'image' => '/img/hoop.jpg',
                'price' => 2990
            ],

            [
                'name' => 'Kids Basketball Stand',
                'description' => 'K100 Monster Kids Basketball Basket.',
                'image' => '/img/KBStand.jpg',
                'price' => 6990
            ],


        ];
  
        foreach ($items as $key => $value) {
            Item::create($value);
        }
    }
}
