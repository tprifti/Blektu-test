<?php

class ColorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('colors')->delete();
        DB::table('colors')->insert(
            array(
                array('color' => 'White'),
                array('color' => 'Black'),
                array('color' => 'Gray'),
                array('color' => 'Green'),
                array('color' => 'Other'),
            )
        );
    }
}