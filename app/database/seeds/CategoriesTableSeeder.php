<?php

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert(
            array(
                array('category' => 'Technology'),
                array('category' => 'Clothes'),
                array('category' => 'Books'),
                array('category' => 'Jewelery'),
                array('category' => 'Other'),
            )
        );
    }

}
