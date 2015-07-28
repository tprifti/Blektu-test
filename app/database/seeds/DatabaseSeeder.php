<?php

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        Eloquent::unguard();
        $this->call('UserTableSeeder');
        $this->call('SizesTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('ConditionsTableSeeder');
        $this->call('ColorsTableSeeder');
        $this->call('ItemsTableSeeder');
        $this->call('ImagesTableSeeder');
        $this->call('AdminsTableSeeder');
    }
}
