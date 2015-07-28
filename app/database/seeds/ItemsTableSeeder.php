<?php

class ItemsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('items')->delete();
        Items::create(array(
            'name' => 'iPhone 6',
            'description' => 'Text to describe iPhone 6',
            'price' => '500',
            'brand' => 'Apple',
            'condition_ID' => DB::table('conditions')->select('id')->where('type', 'new')->first()->id,
            'category_ID' => DB::table('categories')->select('id')->where('category', 'Technology')->first()->id,
            'color_ID' => DB::table('colors')->select('id')->where('color', 'Black')->first()->id,
            'user_ID' => DB::table('users')->select('id')->where('username', 'user')->first()->id,
            'size_ID' => DB::table('sizes')->select('id')->where('size', 'Other')->first()->id
        ));

        Items::create(array(
            'name' => 'Bluze per meshkuj',
            'description' => 'Text to describe T-Shirt',
            'price' => '20',
            'brand' => 'LTB',
            'condition_ID' => DB::table('conditions')->select('id')->where('type', 'new')->first()->id,
            'category_ID' => DB::table('categories')->select('id')->where('category', 'Clothes')->first()->id,
            'color_ID' => DB::table('colors')->select('id')->where('color', 'Black')->first()->id,
            'user_ID' => DB::table('users')->select('id')->where('username', 'user')->first()->id,
            'size_ID' => DB::table('sizes')->select('id')->where('size', 'Medium')->first()->id
        ));

        Items::create(array(
            'name' => 'Pantallona Xhins per Femra',
            'description' => 'Text to describe Jeans',
            'price' => '40',
            'brand' => 'Celio',
            'condition_ID' => DB::table('conditions')->select('id')->where('type', 'new')->first()->id,
            'category_ID' => DB::table('categories')->select('id')->where('category', 'Clothes')->first()->id,
            'color_ID' => DB::table('colors')->select('id')->where('color', 'Gray')->first()->id,
            'user_ID' => DB::table('users')->select('id')->where('username', 'test')->first()->id,
            'size_ID' => DB::table('sizes')->select('id')->where('size', 'Small')->first()->id,
        ));

        Items::create(array(
            'name' => 'Samsung Galaxy S4',
            'description' => 'Text to describe Samsung Galaxy S4',
            'price' => '200',
            'brand' => 'Samsung',
            'condition_ID' => DB::table('conditions')->select('id')->where('type', 'used')->first()->id,
            'category_ID' => DB::table('categories')->select('id')->where('category', 'Technology')->first()->id,
            'color_ID' => DB::table('colors')->select('id')->where('color', 'White')->first()->id,
            'user_ID' => DB::table('users')->select('id')->where('username', 'test')->first()->id,
            'size_ID' => DB::table('sizes')->select('id')->where('size', 'Other')->first()->id
        ));

        Items::create(array(
            'name' => 'Java Programming Deitel & Deitel',
            'description' => 'Text to describe Book',
            'price' => '10',
            'brand' => 'Deitel & Deitel',
            'condition_ID' => DB::table('conditions')->select('id')->where('type', 'used')->first()->id,
            'category_ID' => DB::table('categories')->select('id')->where('category', 'Books')->first()->id,
            'color_ID' => DB::table('colors')->select('id')->where('color', 'Other')->first()->id,
            'user_ID' => DB::table('users')->select('id')->where('username', 'test')->first()->id,
            'size_ID' => DB::table('sizes')->select('id')->where('size', 'Other')->first()->id
        ));
    }

}