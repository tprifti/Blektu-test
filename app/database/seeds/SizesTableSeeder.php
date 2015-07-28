<?php

class SizesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('sizes')->delete();
        DB::table('sizes')->insert(
            array(
                array('size' => 'Extra Small'),
                array('size' => 'Small'),
                array('size' => 'Medium'),
                array('size' => 'Large'),
                array('size' => 'Extra Large'),
                array('size' => 'Other'),
            )
        );
    }
}