<?php

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->delete();
        DB::table('admins')->insert(
            array(
                'username' => 'admin',
                'email' => 'admin@mailservice.com',
                'password' => Hash::make('admin'),
                'firstname' => 'Super',
                'lastname' => 'User',
            )
        );
    }
}
