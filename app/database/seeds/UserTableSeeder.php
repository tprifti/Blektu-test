<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'user@mailservice.com',
            'username' => 'user',
            'password' => Hash::make('user'),
            'address1' => '7825 Silent Timber Townline, Pocahontas, North Dakota',
            'firstname' => 'Murat',
            'lastname' => 'Gjoniku'
        ));

        User::create(array(
            'email' => 'tester@xmail.net',
            'username' => 'test',
            'password' => Hash::make('test'),
            'address1' => '283 Blue Butterfly Quay, Torpedo, Alaska',
            'address2' => '7345 Clear Fox Circle, Mobjack, Alaska',
            'phone' => '+1 541 754 3010',
            'firstname' => 'Hamit',
            'lastname' => 'Altintop'
        ));
    }

}