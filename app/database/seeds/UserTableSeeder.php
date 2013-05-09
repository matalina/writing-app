<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        	'username' => 'iAmAdmin',
        	'password' => Hash::make('password'),
        	'email' => 'admin@localhost'
        ));
    }

}