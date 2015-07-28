<?php

class ConditionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('conditions')->delete();
        DB::table('conditions')->insert(
            array(
                array('type' => 'new'),
                array('type' => 'used'),
                array('type' => 'not working'),
            )
        );
    }
}