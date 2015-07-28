<?php

class ImagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('images')->delete();
        DB::table('images')->insert(
            array(
                array(
                    'item_id' => DB::table('items')->select('id')->where('name', 'iPhone 6')->first()->id,
                    'image' => 'images/seed_images/bgr-iphone-6-1.jpg'
                ),
                array(
                    'item_id' => DB::table('items')->select('id')->where('name', 'Bluze per meshkuj')->first()->id,
                    'image' => 'images/seed_images/black-tshirt_22.jpg'
                ),
                array(
                    'item_id' => DB::table('items')->select('id')->where('name', 'Pantallona Xhins per Femra')->first()->id,
                    'image' => 'images/seed_images/gray_jeans.jpg'
                ),
                array(
                    'item_id' => DB::table('items')->select('id')->where('name', 'Samsung Galaxy S4')->first()->id,
                    'image' => 'images/seed_images/samsung_s4_white.jpg'
                ),
                array(
                    'item_id' => DB::table('items')->select('id')->where('name', 'Java Programming Deitel & Deitel')->first()->id,
                    'image' => 'images/seed_images/Java_Programming_Deitel.jpg'
                ),
            )
        );
    }
}